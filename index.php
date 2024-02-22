<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Main site"); ?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
    <a class="header-logo" <?php if($APPLICATION->GetCurDir() !== '/'):?> href="/" <?php endif ?> >To Home</a>

<?php
var_dump($APPLICATION->GetCurDir());
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>