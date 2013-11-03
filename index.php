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
    <div class="innerContainer">
    <span class="titleBlock">
    40 bytes from ea-in-x93.<span class="title">ping<span class="black">Check</span></span>.com: icmp_seq=0 ttl=55 time=4.18 ms<br>
    </span>

        <div id="addContainer" class="row">
            <div class="col-md-1">
                <span class="inline"><button id="refresh" class="btn btn-warning" onClick="refresh();"><span class="glyphicon glyphicon-refresh"></button></span>
            </div>
            <form id ='insertDomain' action='insert.php' method='post'>
            </form>
        </div>

        <div id="resultContainer">
            <form id ='deleteDomain' action='delete.php' method='post'>
            </form>
            <div id="resultUpdate"></div>
        </div>
    </div>

</div>



<?php
    
include './layouts/_footer.php';
    
?>
