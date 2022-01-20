<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width />
<title>Insert-Data</title>
</head>
<body>
    <h1> Page A </h1>
    <img id="pictureUrl" width="25%">
  <p id="userId"></p>
  <p id="displayName"></p>
  <p id="statusMessage"></p>
  <p id="getDecodedIDToken"></p>

<h2> พืชเศรษฐกิจ </h2>
<form  action = "frminsert.php" method="POST">
    <select name="planteco" type="text" id="planteco"  required >
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

<a @click="clickForm()"><input type="submit" value="Save"></a>
<input type="reset" value="Cancel">

</form>
                          
                        

<script src="https://static.line-scdn.net/liff/edge/versions/2.9.0/sdk.js"></script>
    <script>
    
    function runApp() {
      liff.getProfile().then(profile => {
        document.getElementById("pictureUrl").src = profile.pictureUrl;
        document.getElementById("userId").innerHTML = '<b>UserId:</b> ' + profile.userId;
        document.getElementById("displayName").innerHTML = '<b>DisplayName:</b> ' + profile.displayName;
        document.getElementById("statusMessage").innerHTML = '<b>StatusMessage:</b> ' + profile.statusMessage;
        document.getElementById("getDecodedIDToken").innerHTML = '<b>Email:</b> ' + liff.getDecodedIDToken().email;
      }).catch(err => console.error(err));
    }
    liff.init({ liffId: "1656823507-ygeoXjzO" }, () => {
      if (liff.isLoggedIn()) {
        runApp()
      } else {
        liff.login();
      }
    }, err => console.error(err.code, error.message));
// </script>

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