<?php 
require 'Views/Components/header.php';

require 'Models/LegalNotice.php';

$userNotices=getNotice();


require 'Views/legalNoticeView.php';

require 'Views/Components/footer.php'



?>
