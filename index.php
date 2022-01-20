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