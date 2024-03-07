<?php
include "../bot.php";
include "../db/koneksi.php";
?>
<?php
    session_start();

    if($_SESSION['level']==""){
        header("location:../index.php?pesan=gagal");
    }

    if($_SESSION['level']=="kasir"){
        header("location:../kasir/index.php");
    }
    if($_SESSION['level']=="owner"){
        header("location:../owner/index.php");
    }

    echo $_SESSION['level'];
?>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
    <!--SIDEBAR-->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-spa icon'></i>Amour Laundry</a>
        <ul class="side-menu">
            <li><a href="index.php" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Interface</li>
            <li>
                <a href="#"><i class='bx bxs-shopping-bag-alt icon'></i>Master Data<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="index.php?admin=tb-outlet-list">Outlet</a></li>
                    <li><a href="index.php?admin=member-list">Member</a></li>
                    <li><a href="index.php?admin=tb-paket-list">Paket</a></li>
                </ul>
            </li>
            <li>
            <a href="#"><i class='bx bx-money icon'></i>Transaksi<i class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                    <li><a href="index.php?admin=transaksi-list">Data Transaksi</a></li>
                </ul>
            </li>
        </ul>
        <div class="ads">
            <div class="wrapper">
                <a href="../logout.php" class="btn-upgrade">Logout</a>
                <p>Be a <span>wise and </span>smart admin <span>enjoy your work</span></p>
            </div>
        </div>
    </section>
    <!--SIDEBAR-->

    <!--NAVBAR-->
    <section id="content">
        <!--NAVBAR-->
       <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <p></p>
                </div>
            </form>
            <span class="divider"></span>
            <div class="profile">
                <img src="R.jpg" alt="">
                <ul class="profile-link">
                    <li><a href="../logout.php"><i class='bx bx-log-out icon'></i>Logout </a></li>
                </ul>
            </div>
        </nav>
        <!--NAVBAR-->

        <!--MAIN-->
        <main>
        <?php 
			if(isset($_GET['admin'])){
				$page = $_GET['admin'];
				switch ($page) {
                    case 'transaksi':
                        include "transaksi.php";
                        break;
                    case 'member-list':
                        include "member_list.php";
                        break;
                    case 'member-delete':
                        include "member_delete.php";
                        break;
                    case 'member-add':
                        include "member_add.php";
                        break;
                    case 'member-edit':
                        include "member_edit.php";
                        break;
                    case 'tb-outlet':
                        include "tb_outlet.php";
                        break;
                    case 'tb-outlet-list':
                        include "tb_outlet_list.php";
                        break;	
                    case 'tb-outlet-delete':
                        include "tb_outlet_delete.php";
                        break;	
                        
                    case 'tb-paket':
                        include "tb_paket.php";
                        break;	
                    case 'tb-paket-list':
                        include "tb_paket_list.php";
                        break;	
                    case 'tb-paket-edit':
                        include "tb_paket_edit.php";
                        break;
                    case 'tb-paket-delete':
                        include "tb_paket_delete.php";
                        break;	
                    case 'tb-outlet-edit':
                        include "tb_outlet_edit.php";
                        break;
                        case 'transaksi-list':
                            include "transaksi_list.php";
                            break;
                    case 'transaksi-add':
                        include "transaksi_add.php";
                        break;
                    case 'transaksi-edit':
                        include "transaksi_edit.php";
                        break;
                    case 'transaksi_delete':
                        include "transaksi_delete.php";
                        break;
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "home.php";
			}
	 ?>
        </main>
        <!--MAIN-->
    </section>
    <!--NAVBAR-->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript">
        //SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function(e){
        e.preventDefault();

        if(!this.classList.contains('active')){
            allDropdown.forEach(i=>{
                const aLink = i.parentElement.querySelector('a:first-child');

                aLink.classList.remove('active');
                i.classList.remove('show');
            })
        }

        this.classList.toggle('active');
        item.classList.toggle('show');
    })
})





//SIDEBAR COLLAPSE 
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

    if(sidebar.classList.contains('hide')) {
        allSideDivider.forEach(item=> {
            item.textContent = '-'
        })
                
allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.classList.remove('active');
    item.classList.remove('show');
})
    } else {
        allSideDivider.forEach(item=> {
            item.textContent = item.dataset.text;
        })
    }

toggleSidebar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');

    if(sidebar.classList.contains('hide')) {
        allSideDivider.forEach(item=> {
            item.textContent = '-'
        })

        
allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.classList.remove('active');
    item.classList.remove('show');
})

    } else {
        allSideDivider.forEach(item=> {
            item.textContent = item.dataset.text;
        })
    }
})


sidebar.addEventListener('mouseleave', function(){
    if (this.classList.contains ('hide')){
    allDropdown.forEach(item=> {
        const a = item.parentElement.querySelector('a:first-child');
        a.classList.remove('active');
        item.classList.remove('show');
     })
     allSideDivider.forEach(item=> {
        item.textContent = '-'
     })
    }
})



sidebar.addEventListener('mouseenter', function(){
    if (this.classList.contains ('hide')){
    allDropdown.forEach(item=> {
        const a = item.parentElement.querySelector('a:first-child');
        a.classList.remove('active');
        item.classList.remove('show');
     })
     allSideDivider.forEach(item=> {
        item.textContent = item.dataset.text;
     })
    }
})



// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function (){
    dropdownProfile.classList.toggle('show')
})




//MENU 
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
    const icon = item.querySelector('.icon');
    const menuLink = item.querySelector('.menu-link');

    icon.addEventListener('click', function (){
        menuLink.classList.toggle('show');
    })
})


window.addEventListener('click', function (e){
    if(e.target !== imgProfile){
        if(e.target !== dropdownProfile) {
            if(dropdownProfile.classList.contains('show')) {
                dropdownProfile.classList.remove('show');
            }
        }
    }

    allMenu.forEach(item=> {
        const icon = item.querySelector('.icon');
        const menuLink = item.querySelector('.menu-link');
    
        if(e.target !== icon){
            if(e.target !== menuLink) {
                if (menuLink.classList.contains ('show')) {
                    menuLink.classList.remove('show')
                }
            }
        }
    })
    
})





//PROGRESSBAR
const allPogress = document.querySelectorAll('main .card .progress');

allPogress.forEach(item=> {
    item.style.setProperty('--value', item.dataset.value)
})





//APEXCHART
var options = {
    series: [{
    name: 'series1',
    data: [31, 40, 28, 51, 42, 109, 100]
    }, {
        name: 'series2',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],
        chart: {
        height: 350,
        type: 'area'
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
        x: {
        format: 'dd/MM/yy HH:mm'
        },
    },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    </script>
    <style>
@import url('https://fonts.goggleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');
* {
    font-family: 'Open sans', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    --main-color: #C1AEFC;
    --color-drak: #E3DFFD;
    --text-grey:  #8390A2;
    --pink-gelap: #8675A9;
    --putih: #fff ;
}
html {
    overflow-x: hidden;
}
body {
    background: var(--color-drak);
}
a {
    text-decoration: none;
}
li {
    list-style: none;
}
/*SIDEBAR*/
#sidebar {
    position: fixed;
    max-width: 260px;
    width: 100%;
    background: var(--main-color);
    top: 0;
    left: 0;
    height: 100%;
    overflow-y: auto;
    scrollbar-width: none;
    transition: all .3s ease;
    z-index: 200;
}
#sidebar.hide {
    max-width: 60px;
}
#sidebar.hide:hover {
    max-width: 260px;
}
#sidebar::-webkit-scrollbar{
    display: none;
}
#sidebar .brand {
    font-size: 24px;
    display: flex;
    align-items: center;
    height: 64px;
    font-weight: 800;
    color: #fff;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 100;
    background: var(--main-color);
    transition: all .3s ease;
    padding: 0 6px ;
}
#sidebar .icon {
    min-width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 6px;
}
#sidebar .icon-right{
    margin-left: auto;
    transition: all .3s ease;

}
#sidebar .side-menu {
    margin: 36px 0;
    padding: 0 20px;
    transition: all .3s ease;
}
#sidebar.hide .side-menu {
    padding: 0 6px;

}
#sidebar.hide:hover .side-menu {
    padding: 0 20px;
}
#sidebar .side-menu a {
    display: flex;
    align-items: center;
    font-size: 14px;
    color: rgb(54, 53, 53);
    padding: 12px 16px 12px 0;
    transition: all .3s ease;
    border-radius: 10px;
    margin: 4px 0;
    white-space: nowrap;
}
#sidebar .side-menu > li > a:hover {
    background: var(--color-drak);
}
#sidebar .side-menu > li > a.active .icon-right {
    transform:rotateZ(90deg) ;
}
#sidebar .side-menu > li > a.active,
#sidebar .side-menu > li > a.active:hover {
    background: var(--color-drak);
    color:rgb(54, 53, 53);
}
#sidebar.hide:hover .divider {
    text-align: left;
}
#sidebar .divider  {
    margin-top: 24px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
    color: rgb(128, 125, 125);
    transition: all.3s ease ;
    white-space: nowrap;
}
#sidebar.hide .divider {
    text-align: center;
}
#sidebar .side-dropdown {
    padding-left: 54px;
    max-height: 0;
    overflow-y: hidden;
    transition: all .15s ease;
}
#sidebar .side-dropdown.show{
    max-height: 1000px;
}
#sidebar .side-dropdown a:hover {
    color: #fff;
}
#sidebar .ads {
    width: 100%;
    padding: 20px;
}
#sidebar.hide:hover .ads {
    display: block;
}
#sidebar .ads .wrapper {
    background: #E3DFFD;
    padding: 20px;
    border-radius: 10px;
}
#sidebar.hide .ads {
    display: none;
}
#sidebar .btn-upgrade {
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 12px 0;
    color: var(--color-drak);
    background-color: var(--main-color);
    transition: all .3s ease ;
    border-radius: 5px;
    font-weight: 600;
    margin-bottom: 12px;
}
#sidebar .btn-upgrade:hover {
    background: var(--pink-gelap);
}
#sidebar .ads .wrapper p {
    font-size: 12px;
    color: rgb(54, 53, 53);
    text-align: center;
}
#sidebar .ads .wrapper p span {
    font-weight: 700;
    color: black;
}
/*SIDEBAR*/


/*CONTENT*/
#content {
    position: relative;
    width: calc(100% - 260px);
    left: 260px;
    transition: all .3s ease;
}
#sidebar.hide + #content {
    width: calc(100% - 60px);
    left: 60px;
}
/*NAVBAR*/
nav {
    background: var(--main-color);
    height: 64px;
    padding: 0 20px;
    display: flex;
    align-items: center;
    grid-gap: 28px;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 100;  
    margin-top: -26px;
}
nav .toggle-sidebar {
    font-size: 18px;
    cursor: pointer;
}
nav form {
    max-width: 400px;
    width: 100%;
    margin-right: auto;
}
nav .form-group {
    position: relative;
}
nav .form-group input {
    width: 100%;
    background: var(--color-drak);
    border-radius: 5px;
    border: none;
    outline: none;
    padding: 10px 36px 10px 16px;
    transition: all .3s ease;
}
nav .form-group input:focus {
    box-shadow: 0 0 0 1px var(--pink-gelap), 0 0 0 4px var(--pink-gelap);
}
nav .form-group .icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 16px;
    color: var(--pink-gelap);
}
nav .nav-link {
    position: relative;
}
nav .nav-link .icon {
    font-size: 19px;
    color: black;
}
nav .nav-link .badge {
    position: absolute;
    top: -12px;
    right: -12px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid var(--main-color);
    background: red;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 10px;
    font-weight: 700 ;


}
nav .divider {
    width: 1px;
    background: var(--pink-gelap);
    height: 12px;
    display: block;
}
nav .profile {
    position: relative;
}
nav .profile img {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
}
nav .profile .profile-link  {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    background: var(--color-drak);
    padding: 10px 0;
    box-shadow: 4px 4px 16px rgba(0,0,0,.1);
    border-radius: 10px;
    width: 160px;
    opacity: 0;
    pointer-events: none;
    transition: ALL .3s ease;
}
nav .profile .profile-link.show {
    opacity: 1;
    pointer-events: visible;
    top: 100%;
}
nav .profile .profile-link a {
    padding: 10px 16px ;
    display: flex;
    grid-gap: 10px;
    font-size: 14px;
    color: black;
    align-items: center;
    transition: all .3s ease;
}
nav .profile .profile-link a:hover {
    background: var(--main-color);
}




/*NAVBAR*/


/*MAIN*/
main {
    width: 100%;
    padding: 24px 20px 20px 20px;
}
main .title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 10px;
}
main .breadcrumbs {
    display: flex;
    grid-gap: 6px;
}
main .breadcrumbs li,
main .breadcrumbs li a {
    font-size: 14px;
}
main .breadcrumbs li a {
    color: var(--pink-gelap);
}
main .breadcrumbs li a.active,
main .breadcrumbs li.divider {
    color: grey;
    pointer-events: none;
}
main .info-data {
    margin-top: 36px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr ));
    grid-gap: 20px;
}
main .info-data .card {
    padding: 20px;
    border-radius: 10px;
    background: var(--main-color);
    box-shadow: 4px 4px 16px rgba(0,0,0,.05);
}
main .card .head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
main .card .head h2 {
    font-size: 24px;
    font-weight: 600;
}
main .card .head p {
    font-size: 14px;
}
main .card .head .icon {
    font-size: 20px;
    color: var(--color-drak);
}
main .card .progress  {
    display: block;
    margin-top: 24px;
    height: 10px;
    width: 100%;
    border-radius: 10px;
    background: #EEEEEE;
    overflow-y: hidden;
    position: relative;
    margin-bottom: 4px;
}
main .card .progress::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: var(--pink-gelap);
    width: var(--value);
}
main .card .label {
    font-size: 14px;
    font-weight: 700;
}
main .data  {
    display: flex;
    grid-gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}
main .data .content-data {
    flex-grow: 1;
    flex-basis: 400px;
    padding: 20px;
    background-color: #F9F9F9;
    border-radius: 10px;
    box-shadow: 4px 4px 16px rgba(0,0,0,.1);
}
main .content-data .head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}
main .content-data .head h3 {
    font-size: 20px;
    font-weight: 600;
}
main .content-data .head .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
main .content-data .head .menu .icon {
    cursor: pointer;
}
main .content-data .head .menu-link {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    width: 140px;
    background: var(--color-drak);
    border-radius: 10px;
    box-shadow: 4px 4px 16px rgba(0,0,0,.1);
    padding: 10px 0;
    z-index: 100;
    opacity: 0;
    pointer-events: none;
    transition: all .3s ease;
}
main .content-data .head .menu-link.show {
    top: 100%;
    opacity: 1;
    pointer-events: visible;
}
main .content-data .head .menu-link a {
    display: block;
    padding: 6px 16px ;
    font-size:14px ;
    color: black;
    transition: all .3s ease;
}
main .content-data .head .menu-link a:hover {
    background: var(--main-color);
}
main .content-data .chart {
    width: 100%;
    max-width: 100%;
    overflow-x: auto;
    scrollbar-width: none;

}
main .content-data .chart::-webkit-scrollbar {
    display: none;
}
main .chat-box  {
    width: 100%;
    max-height: 360px;
    overflow-y: auto;
    scrollbar-width: none;
}
main .chat-box::-webkit-scrollbar{
    display: none;
}
main .chat-box .day {
    text-align: center;
    margin-bottom: 10px;
}
main .chat-box .day span {
    display: inline-block;
    padding: 6px 12px ;
    border-radius: 20px;
    background: var(--main-color);
    color: #fff;
    font-size: 12px;
    font-weight: 600;
}
main .chat-box .msg img {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    object-fit: cover;
}
main .chat-box .msg {
    display: flex;
    grid-gap: 6px;
    align-items: flex-start;
}
main .chat-box .profile .username {
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    margin-right: 6px;

}
main .chat-box .profile .time  {
    font-size: 12px;
    color: var(--text-grey);
}
main .chat-box .chat p {
    font-size:6px 10px;
    display: inline-block;
    max-width: 400px;
    line-height: 150%;
}
main .chat-box .msg:not(.me) .chat p {
    border-radius: 0 5px 5px 5px;
    background: var(--main-color);
    color: #fff;
}
main .chat-box .msg.me {
    justify-content: flex-end;
}
main .chat-box .msg.me .profile {
    text-align: right;
}
main .chat-box .msg.me p {
    background: var(--color-drak);
    border-radius: 5px 0 5px 5px;
}
main form {
    margin-top: 6px;
}
main .form-group {
    width: 100%;
    display: flex;
    grid-gap: 1-px;
}
main .form-group input {
    flex-grow: 1;
    padding: 10px 16px ;
    border-radius: 5px;
    outline: none;
    background-color: rgb(231, 229, 229);
    border: none;
    transition: all .3s ease;
    width: 100%;
}
main .form-group input:focus {
    box-shadow: 0 0 0 1px var(--pink-gelap), 0 0 0 4px var(--main-color);
}
main .btn-send  {
    padding: 0 16px;
    background: var(--main-color);
    border-radius: 5px;
    color: var(--color-drak);
    cursor: pointer;
    border: none;
    transition: all .3s ease;
}
main .btn-send:hover {
    background: var(--pink-gelap);

}
/*MAIN*/
/*CONTENT*/




@media screen and (max-width: 768px) {
    #content {
        position: relative;
        width: calc(100% - 60px);
        transition: all .3s ease;
    }
    nav .nav-link,
    nav .divider {
        display: none;
    }
}



    </style>

<a href="../logout.php">Logout</a>