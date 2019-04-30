<?php include("header.php"); ?>
<section class="all">
    <div class="join-box">
        <form action="join.ok.php" method="post" onsubmit="return join_check()">
            <label for="joinname">닉네임<input type="text" id="joinname" name="joinname" placeholder="닉네임"><div id="res_nick">사용가능한 닉네임 입니다.</div></label><input type="button" value="중복확인" onclick=chid(0)>
            <input type="hidden" id="chk_nick" name="chk_nick" value="0">
            <label for="joinid">아이디<input type="text" id="joinid" name="joinid" placeholder="아이디" maxlength=15><div id="res_id">사용가능한 아이디 입니다.</div></label><input type="button" value="중복확인" onclick=chid(1)>
            <input type="hidden" id="chk_id" name="chk_id" value="0">
            <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
            <label for="joinpw">비밀번호<input type="password" id="joinpw" name="joinpw" placeholder="비밀번호" maxlength=20></label>
            <label for="joinpw_ok">비밀번호 재입력<input type="password" id="joinpw_ok" name="joinpw_ok" placeholder="비밀번호 재입력" maxlength=20><div id="res_pw">비밀번호가 일치합니다.</div></label>
            <label for="email">이메일<input type="text" id="email" name="email" placeholder="이메일"></label>
            <label><input type="submit" value="회원가입"></label>
        </form>
    </div>
</section>
<script>
    function chid(e){
        if(e == 1){
            $('#chk_id').val("0");
            var id = $("#joinid").val();
            if( id == "" ){
                alert("아이디를 입력하세요.");
                return false;
            }
            ifrm1.location.href = "join_chk.php?joinid="+id;
        }
        if(e == 0){
            $("#chk_nick").val("0");
            var nick = $("#joinname").val();
            if(nick == ""){
                alert("닉네임을 입력하세요.");
                return false;
            }
            ifrm1.location.href = "join_chk.php?joinname="+nick;
        }
    }
    function join_check(){
        var name = $("#joinname").val();
        var id = $("#joinid").val();
        var pw = $("#joinpw").val();
        var pw_ok = $("#joinpw_ok").val();
        var em = $("#email").val();
        var chk_id = $("#chk_id").val();
        var chk_nick = $("#chk_nick").val();
        var re = true;
        if(name == "" || id == "" || pw == "" || em == ""){
            alert("모든 정보를 입력해 주세요.");
            re = false;
        }
        else if(chk_nick == "0"){
            // $("#res_nick").show();
            // $("#res_nick").css({"color":"red"});
            // $("#res_nick").text("닉네임 중복확인을 하십시오.");
            alert("닉네임 중복확인을 하십시오.");
            re = false;
        }
        else if(chk_id == "0"){
            // $("#res_id").show();
            // $("#res_id").css({"color":"red"});
            // $("#res_id").text("아이디 중복확인을 하십시오.");
            alert("아이디 중복확인을 하십시오.");
            re = false;
        }
        else if(pw != pw_ok){
            alert("비밀번호가 일치하지 않습니다.");
            re = false;
        }
        return re;
    }
    $("#joinpw_ok").keyup(function(){
        var pw_1 = $("#joinpw").val();
        var pw_2 = $("#joinpw_ok").val();
        if(pw_1 == pw_2){
            $("#res_pw").show();
            $("#res_pw").text("비밀번호가 일치합니다.");
            $("#res_pw").css({"color":"green"});
        } else {
            $("#res_pw").show();
            $("#res_pw").text("비밀번호가 일치하지 않습니다.");
            $("#res_pw").css({"color":"red"});
        }
    });
</script>
<?php include("footer.php");?>