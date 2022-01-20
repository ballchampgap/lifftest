<!DOCTYPE html>
<html>
<head>
<title>Insert-Data</title>
</head>
<body>
    <h1> Page A</h1>
    <img id="pictureUrl">
    <p id="displayName"><b>displayName:</b></p>


<h2> พืชเศรษฐกิจ </h2>
<form  action = "frminsert.php" method="POST">
    <select name="plant" type="text" id="plant"  required >
        <option>พืชเศรษฐกิจอะไร</option>
        <option value="rice">ข้าว</option>
        <option value="rubber">ยางพารา</option>
        <option value="sugarcane">อ้อย</option>
        <option value="cassava">มันสำปะหลัง</option>
        <option value="palmoil">ปาล์มน้ำมัน</option>
    </select><br>

<select name="epi" type="text" id="epi"  required >
        <option>เกี่ยวกับอะไร</option>
        <option value="epidemic">โรคระบาด</option>
        <option value="pest">ศัตรูพืช</option>
    </select><br>

<label>รายละเอียด</label><br>
<input name="descrip" type="text" id="descrip"   required> <br>

<label>ละติจูด</label><br>
<input name="lat" type="text" id="lat"   required> <br>

<label>ลองติจูด</label><br>
<input name="lon" type="text" id="log"  required> <br>

<input type="submit" value="Save">
<input type="reset" value="Cancel">

</form>



    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
  <script>
    function logOut() {
      liff.logout()
      window.location.reload()
    }
    function logIn() {
      liff.login({ redirectUri: window.location.href })
    }
    async function getUserProfile() {
      const profile = await liff.getProfile()
      document.getElementById("pictureUrl").style.display = "block"
      document.getElementById("pictureUrl").src = profile.pictureUrl
    }
    async function main() {
      await liff.init({ liffId: "1656823507-ygeoXjzO" })
      if (liff.isInClient()) {
        getUserProfile()
      } else {
        if (liff.isLoggedIn()) {
          getUserProfile()
          document.getElementById("btnLogIn").style.display = "none"
          document.getElementById("btnLogOut").style.display = "block"
        } else {
          document.getElementById("btnLogIn").style.display = "block"
          document.getElementById("btnLogOut").style.display = "none"
        }
      }
    }
    main()
  </script>
</body>
</html>