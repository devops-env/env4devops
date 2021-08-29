<?php

namespace Env;

class Alphabet
{
    public $uri = null;
    public $func = null;
    public $version = null;
    public $files = array();
    public $key = 'play';

    public function __construct($func = null)
    {
        $version = '';
        $this->files = array(
            'play0' => 'e:/env/www\work\wuding\astrology\web\index.php',
            'robot1' => 'E:/Server/VCS/GitHub/wuding/astrology/master/web/index.php',
            'phpliteadmin' => ROOT_DIR .'/dev/storage/mirror/https/bitbucket.org/phpliteadmin/public/downloads/.unzip/phpLiteAdmin_v1-9-8-2/phpliteadmin.php',
            'unicode' => ROOT_DIR .'/tmp/www/unicode.php',
        );

        if (preg_match('/^\/(wubenli2|resume|adminer)([^?]*)/i', $_SERVER['REQUEST_URI'], $matches)) {
            $func = $matches[1];
            $version = $matches[2];

        } elseif (preg_match('/^\/(play0|robot1|phpliteadmin|unicode)(.*)/i', $_SERVER['REQUEST_URI'], $matches)) {
            $this->key = $matches[1];
            $func = 'func';
        }
        $this->func = $func;
        $this->version = $version;
    }

    public function resume()
    {
        $resume_dir = ROOT_DIR . '/www/work/wubenli/tmp/resume';
        $pathinfo = pathinfo(parse_url('scheme://host' . $_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $extnsion = 'htm';
        if (isset($pathinfo['extension'])) {
            $ext = strtolower(trim($pathinfo['extension']));
            if (in_array($ext, ['pdf', 'doc', 'html'])) { // 要下载的扩展名
                $extnsion = $ext;
                $path = $resume_dir . '/wubenli.' . $extnsion;
                $file_name = '吴本利的简历';
                $filename = iconv('UTF-8', 'GBK', $file_name);

                header('Content-Type: application/octet-stream');
                header ( 'Content-Disposition: attachment;filename="' . $filename . '.' . $extnsion . '"' );
                header ( 'Cache-Control: max-age=0' );
                echo file_get_contents($path);
                exit;
            }
        }

        return require ROOT_DIR . '/dev\storage\cdn\dist\v1\resume/wubenli.htm';
    }

    public function wubenli()
    {
        $this->resume();
    }

    public function adminer($version = '4.7.3')
    {
        $version = $this->version ? : $version;
        return require ROOT_DIR . "/dev/storage/mirror/https/github.com/vrana/adminer/release/download/v$version/adminer-$version.php";
    }

    public function func()
    {
        $file = $this->files[$this->key] ?? null;
        if (!$file) {
            return false;
        }
        return require $file;
    }

    public function run($uri = null)
    {
        $func = $this->func;
        if ($func) {
            return $this->$func();
        }
        return false;
        return $uri;
    }
}

// 需要外部传递变量
$alphabet = new Alphabet();
return $alphabet->run($uri);
