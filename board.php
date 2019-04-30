<?php include("header.php"); ?>
<?php
$sql = "SELECT * FROM board";
$sql .= " ORDER BY wdate DESC";
$rs = $db->query($sql);
$data = $rs->fetchAll(PDO::FETCH_ASSOC);
?>
<script>
function writeclick(){
    var check = "<?php echo $loginid; ?>";
    console.log(check);
    if(!check){
        alert("로그인 후 이용해 주세요.");
        setTimeout(function(){
            location.href = 'login.php';
        });
    } else {
        location.href = "write.php";
    }
}
</script>
<section class="board">
    <button onclick="writeclick()" id="write_click">글쓰기</button>
    <table class="view-table">
        <caption>게시판</caption>
        <tr>
            <th id="v-num">번호</th>
            <th id="v-title">제목</th>
            <th id="v-writer">글쓴이</th>
            <th id="v-date">날짜</th>
            <th id="v-views">조회수</th>
            <!-- <th id="v-like">추천</th> 미구현 -->
        </tr>
            <?php
            if( $data ) {
                foreach($data as $row):
            ?>
            <tr>
                <td><?php echo $row['idx'];?></td>
                <td>
                    <a href="view.php?idx=<?php echo $row['idx'];?>">
                    <?php echo $row['title'];?>
                    </a>
                </td>
                <td><?php echo $row['writer'];?></td>
                <td><?php echo substr($row['wdate'],0,10);?></td>
                <td><?php echo $row['views'];?></td>
                <!-- <td><?php echo $row['likes'];?></td> 미구현 -->
            </tr>
            <?php
                endforeach;
            }
            ?>
    </table>
</section>

<?php include("footer.php");?>