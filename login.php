<?php include("header.php") ?>

<section class="all">
    <div class="login-box">
        <form action="login.ok.php" method="post">
            <label for="userid">아이디<input type="text" id="userid" name="userid" placeholder="아이디" required></label>
            <label for="userpw">비밀번호<input type="password" id="userpw" name="userpw" placeholder="비밀번호" required autocomplete="off"></label>
            <input type="submit" value="로그인">
            <a href="join.php">회원가입</a>
        </form>
    </div>
</section>


<?php include("footer.php") ?>