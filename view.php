<?php include("header.php");?>
<?php
$idx = 0;
$title = "";
$content = "";
$writer = "";
$wdate = "";
$udate = "";
$lieks = 0;
$views = 0;
if(isset($_GET['idx'])){
    $idx = (int)$_GET['idx'];
    $update_view = "UPDATE board SET views = views+1 where idx = $idx";
    $db->query($update_view);
}
if($idx){
    $sql = "SELECT * FROM board WHERE idx = {$idx}";
    if($rs = $db->query($sql)){
        if($data = $rs->fetch()){
            $title = $data['title'];
            $content = $data['content'];
            $writer = $data['writer'];
            $wdate = $data['wdate'];
            $udate = $data['udate'];
            $file = $data['file'];
            // $likes = $data['likes'];
            $views = $data['views'];
        }
    }
}
?>
<section class="view">
    <div class="v-title"><h4><?= $title ?></h4><span><?= $writer ?></span><span><?= $wdate ?></span>
    <div class="fr"><span>조회수 <?= $views?></span>
    <!-- <span>추천 0</span> 구현중-->
    </div></div>
    <div class="v-content"><?= $content ?>
    <?php if($file != ""):?>
    <img src="uploads/<?= $file?>" class="view_file">
    <?php endif; ?>
    </div>
    <div class="vbtn">
        <?php if($writer != "" && $writer == $loginname): ?>
        <a href="write.php?idx=<?= $idx?>" id="edart">글수정</a>
        <a href="" id="delpost">글삭제</a>
        <?php endif; ?>
        <a href="board.php" id="tolist">목록으로</a>
    </div>
</section>


<?php include("footer.php") ?>