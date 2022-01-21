<!DOCTYPE html>
<html>
<head>
<title>Insert-Data</title>
<link rel="stylesheet" href="">
<script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<img id="pictureUrl" width="10%">
<div id="login">
<div class="container">
<div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form  action = "frminsert.php" method="POST" class="form">
                    <h3 class="text-center text-info"><p id="displayName"></p></h3>
                <div class="form-group">
                <label for="username" class="text-info">โปรดเลือก</label><br>
                <select name="planteco" type="text" id="planteco"  required >
        <option class="form-control" value="rice">ข้าว</option>
        <option class="form-control" value="rubber">ยางพารา</option>
        <option class="form-control" value="sugarcane">อ้อย</option>
        <option class="form-control" value="cassava">มันสำปะหลัง</option>
        <option class="form-control" value="palmoil">ปาล์มน้ำมัน</option>
    </select><br>
    </div>
    <div class="form-group">
    <label for="password" class="text-info">โปรดเลือก</label><br>
    <select name="epi" type="text" id="epi"  required >
        <option class="form-control" value="epidemic">โรคระบาด</option>
        <option class="form-control" value="pest">ศัตรูพืช</option>
    </select><br>
</div>
    <div class="form-group">
<label  for="username" class="text-info" >รายละเอียด</label><br>
<input name="descrip" type="text" id="descrip" class="form-control"   required> <br>
</div>

<div class="form-group">
<input class="btn btn-info btn-md" type="submit" value="Save">
<input class="btn btn-danger btn-md" type="reset" value="Cancel">
</div>
</form>
</div>
                </div>
            </div>
        </div>
    </div>                  


    <!-- ไลน์ liff -->
<script>
    function runApp() {
      liff.getProfile().then(profile => {
        document.getElementById("pictureUrl").src = profile.pictureUrl;
        document.getElementById("displayName").innerHTML = '<b>DisplayName:</b> ' + profile.displayName;
      }).catch(err => console.error(err));
    }
    liff.init({ liffId: "1656823507-ygeoXjzO" }, () => {
      if (liff.isLoggedIn()) {
        runApp()
      } else {
        liff.login();
      }
    }, err => console.error(err.code, error.message));
 </script>
<!-- ไลน์ liff -->



<script>
    import axios from "axios";
export default {
    name: "app",
    data() {
        return {
            lat: "",
            lon: "",
            alert: false,
        };
    },
    mounted() {
        this.getLocation();
    },
    methods: {
        getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    this.lat = position.coords.latitude;
                    this.lon = position.coords.longitude;
                });
            }
        },
        createGps() {
            if (this.username === "") {
                this.alert = true;
            } else {
                const config = {
                    headers: {
                        "content-type": "multipart/form-data",
                    },
                };

                let formData = new FormData();
                formData.append("username", this.username);
                formData.append("lat", this.lat);
                formData.append("lon", this.lon);

                axios
                    .post("/api/create/dataGps", formData, config)
                    .then((res) => {
                        if (res) {
                            swal({
                                title: "Good job!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Aww yiss!",
                            });
                            this.username = "";
                            this.alert = false;
                        }
                    })
                    .catch((err) => {
                        this.error = "Error!!";
                    });
            }
        },
        clickForm() {
            this.createGps();
        },
    },
};
  </script>
</body>
</html>