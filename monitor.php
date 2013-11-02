<?php
/*
 *  Place includes, constant defines and $_GLOBAL settings here.
 *  Make sure they have appropriate docblocks to avoid phpDocumentor
 *  construing they are documented by the page-level docblock.
 */
include './includes/mysql.php';
include './includes/functions.php';

include './layouts/_header.php';

?>

<div class="container">

    <?php
    /*
     * Begin body
     */
    ?>
    <span class="titleBlock">
    40 bytes from ea-in-x93.<span class="title">ping<span class="black">Check</span></span>.com: icmp_seq=0 ttl=55 time=4.18 ms<br>
    </span>

    <div id="addContainer" class="row">
        <span class="col-md-1"><button id="addDomain" class="btn btn-warning">Add Domain</button></span>
        <div id="ajaxContainer" class="col-md-5"></div>
    </div>

    <div id="resultContainer">
    </div>



    <button onClick="refresh();">Refresh</button>

</div>



<?php
    
include './layouts/_footer.php'    
    
?>
