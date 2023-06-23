<div>
<div class="scrollmenu" style="display: flex; font-size:12px;">
  <div style="display: block; font-size:12px; "><a style="margin-top:-15%;" href="#" onclick="openPopup()"><img src="user-add-svgrepo-com.png" width="25" height="25"><p style="font-size: 12px; margin-bottom: -2%;">ADD</p></a></div>
  <div style="display: block; font-size:12px; "><a style="margin-top:-10%;" href="?option=person"><img src="table-svgrepo-com.png" width="25" height="25"><p style="font-size: 12px; margin-bottom: -2%;">MANAGE</p></a></div>
  <!-- <a href="?option=book"><img src="book-svgrepo-com.png" wwidth="25" height="25"></a> -->
  <div style="display: block; font-size:12px;" id="menu1"><a style="margin-top:-10%;" href="?option=person&account"><img src="person-account-circle-svgrepo-com (1).png" width="25" height="25"><p style="font-size: 12px; margin-bottom: -2%;">ACCOUNT</p></a></div>
  <div style="display: block; font-size:12px;" id="menu2"><a style="margin-top:-10%;" href="?option=person&setting" ><img src="setting-svgrepo-com.png" width="25" height="25"><p style="font-size: 12px; margin-bottom: -2%;">SETTING</p></a></div>
  <div style="display: block; font-size:12px;" id="menu3"><a style="margin-top:-10%;" href="?option=person&help" ><img src="help-octagon-svgrepo-com.png" width="25" height="25"><p style="font-size: 12px; margin-bottom: -2%;">HELP</p></a></div>
<br>
</div>
<p class="p"></p>
<div>
            <form method="post" class="form">
                <input class="inputsearch" type="search"
                    name="username"><button class="button"><img src="search-magnifying-glass-svgrepo-com (1).png" width="25" height="25"></button>
                    <!-- <input style="font-size: 27px;" type="image" src="search-square-svgrepo-com.png" alt="Submit" width="45" height="45" name="search"> -->
                    
                    <input class="inputsubmit" type="submit" name="delete" value="DELETE">
            </form>
                
</div>
<div class="image">
    <img src="Screenshot 2023-06-22 224226.png" width="1750" height="750">
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

