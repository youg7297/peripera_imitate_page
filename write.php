<?php include("header.php"); ?>
<?php
    $pagetitle = "글쓰기";
    $act = "add";
    $idx = 0;
    $title = "";
    $content = "";
    $writer = "";
    $file = "";
    if( isset($_GET['idx']) ) {
        $idx = (int)$_GET['idx'];
    }
    if( $idx ) {
        $sql = "SELECT * FROM board WHERE idx={$idx}";
        if( $rs = $db->query($sql) ) {
            if( $data = $rs->fetch() ) {
                if($data['writer'] == $_SESSION['loginid']){
                    $act = "update";
                    $pagetitle = "글수정";
                    $title = $data['title'];
                    $content = $data['content'];
                    $file = $data['file'];
                }
            }
        }
    }
?>

<section class="write">
    <form action="save.php" method="post" id="write-form" enctype="multipart/form-data">
        <h2><?php echo $pagetitle ?></h2>
        <input type="hidden" name="act" id="act" value="<?php echo $act;?>">
        <input type="hidden" value="<?php echo $_SESSION['loginname'] ?>">
        <input type="hidden" value="<?php echo $idx ?>" name="idx">
        <div class="write-form-group">
            <input type="text" id="writer" readonly placeholder="글쓴이 : <?php echo $_SESSION['loginid']; ?>" >
            <input type="hidden" name="writer" value="<?php echo $_SESSION['loginid']; ?>">
        </div>
        <div class="write-form-group">
            <input type="text" placeholder="글제목" id="title" name="title" value="<?php echo $title?>">
        </div>
        <div class="write-form-group">
            <textarea placeholder="글본문" rows="20" id="content" name="content"><?php echo $content?></textarea>
        </div>
        <div class="write-form-group">
            <input type="file" name="file" id="file">
            <?php if($file):?>
			    <a href="uploads/<?php echo $file;?>" target="_blank"><?php echo $file;?></a>
		    <?php endif;?>
        </div>
        <input type="submit" value="글 저장">
        <a href="/peripera/board.php" class="secondary" onclick="return secondary()">목록으로</a>
    </form>
</section>
<script>
function secondary(){
    var a = confirm("변경사항이 저장되지 않을 수 있습니다.");
    return a;
}
</script>
<?php include("footer.php"); ?>