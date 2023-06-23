<div>
<div class="scrollmenu">
  <a href="#" onclick="openPopup()"><img src="person-add-svgrepo-com.png" width="25" height="25"></a>
  <a href="?option=person"><img src="table-svgrepo-com.png" width="25" height="25"></a>
  <!-- <a href="?option=book"><img src="book-svgrepo-com.png" wwidth="25" height="25"></a> -->
  <a href="?option=person&account" id="menu1"><img src="person-account-circle-svgrepo-com (1).png" width="25" height="25"></a>
  <a href="?option=setting" id="menu2"><img src="setting-svgrepo-com.png" width="25" height="25"></a>
  <a href="?option=person&infor" id="menu3"><img src="help-circle-svgrepo-com.png" width="25" height="25"></a>
<br>
</div>
<p style="font-size: 35px;"></p>
<div>
            <form method="post" style="display: flex; margin-top: -2%;">
                <input style="margin-top: 0.35%; width:28%; height: 35px; font-size: 42px; margin-left: 60%;" type="search"
                    name="username"><input style="font-size: 27px;" type="image" src="search-square-svgrepo-com.png" alt="Submit" width="45" height="45" name="search">
                    <input style="background-color: red; color: white; margin-left: 1%; border: 1px solid black; padding-left: 20px; padding-right: 20px; font-size: 10px;" type="submit" name="delete" value="DELETE">
            </form>
</div>
<div class="">
    <img src="Screenshot 2023-06-22 224226.png" width="1365" height="660">
</div>
</div>

<div class="popup-wrapper" id="popup-wrapper" style="text-align: center;">
    <div class="popup" style="border-radius: 40px; background-image: url('https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2021/12/hinh-anh-bau-troi.jpg?ssl=1');
" ;>
        <span class="close" onclick="closePopup()">&times;</span>
        <form method="post">
            <section class="class">
                <label style="color: white;">NAME</label><br><input
                    style="border-radius: 100px; width:80%; height: 40px; font-size: 27px;" type="text"
                    name="username"><br>
            </section>
            <section class="class">
                <label style="color: white;">ma SV: </label><br><input
                    style="border-radius: 100px; width:80%; height: 40px; font-size: 27px;" type="text" type="text"
                    name="maSV">
            </section>

            <section class="class">
                <input class="btn btn-sm btn-danger"
                    style="margin-top:10%; border-radius: 40px; background-color: aqua; border:0px; font-size: 29px; color: white; width: 50%"
                    type="submit" value="create" name="create">
            </section>
        </form>
    </div>
</div>

