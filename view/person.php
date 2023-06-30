<div class="background--button">
    <div class="scrollmenu">

        <button class="btn-person">
            <a class="btn-add" href="#" onclick="openPopup()"><img class="icon--img" src="user-add-svgrepo-com.png"
                    width="25" height="25"></a>
            <a class="title--btn" href="#" onclick="openPopup()">ADD</a>
        </button>
        <button class="btn-person">
            <a class="btn-add" href="?option=person"><img class="icon--img" src="table-svgrepo-com (1).png" width="25"
                    height="25"></a>
            <a class="title--btn" href="?option=person">MANAGE</a>
        </button>
    </div>

    <div class="history">
        <form method="post" class="form1">
            <input class="inputsearch1" type="search" name="username"><button class="button"><img
                    src="search-magnifying-glass-svgrepo-com (1).png" width="25" height="25"></button>
            <!-- <input style="font-size: 27px;" type="image" src="search-square-svgrepo-com.png" alt="Submit" width="45" height="45" name="search"> -->

            <input class="inputsubmit1" type="submit" name="delete" value="DELETE">
        </form>

    </div>
    <p></p>
    <div class="image">
        <img src="Screenshot 2023-06-22 224226.png" width="1365" height="650">
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