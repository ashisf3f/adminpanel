<?php
session_start();
if (!isset($_COOKIE['loginfo']) != true || $_SESSION['loggedin'] != true) {
  header('Location: pages/sign-in.php');
  exit();
}
?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>ASK</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.41.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>


  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
</head>


<body class="m-0 font-sans antialiased font-normal dark:bg-[#181616] text-base leading-default bg-gray-50 text-slate-500">
  <!-- sidenav  -->
  <aside class="max-w-62.5 hidden ease-nav-brand z-990 fixed inset-y-0 my-4   w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent scroll-smooth">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="">
        <img src="./assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">ASK</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="opacity-60" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>



        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
        </li>




      </ul>
    </div>


  </aside>

  <!-- end sidenav -->

  <main class="ease-soft-in-out  relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-evenly" navbar-main navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
              <a class="opacity-50 dark:text-white text-slate-700" href="">ASK</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal dark:text-white text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Home</li>
          </ol>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-2 md:mr-0 lg:flex lg:basis-auto">

          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full w-full">

            <li class="flex ">
              <a href="pages/profile.php">
                <i class='fa fa-user mr-1 mt-0.54'></i>
                <?php if(isset($_SESSION['newUsername'])){ echo $_SESSION['newUsername'];}else{ echo $_SESSION['username']; } ?>              </a>
            </li>
            <li class="flex hidden items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 transition-all ease-nav-brand hidden text-sm text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>
            <li class="flex items-center px-4">
              <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                <!-- fixed-plugin-button-nav  -->
              </a>
            </li>

            <!-- notifications -->



          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex justify-center -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words dark:bg-[#161118] bg-white shadow-soft-xl rounded-2xl bg-clip-border">
           
                <div class="flex justify-center  p-2 w-full px-3">
                  <!-- The button to open modal -->
                  <label for="my-modal" class="btn ">Upload Post?</label>

                  <!-- Put this part before </body> tag -->
                  <input type="checkbox" id="my-modal" class="modal-toggle" />
                  <div class="modal">
                    <div class="modal-box">
                      <div class="flex justify-between">
                        <div>
                          <h3 class="font-bold text-lg  text-blue-700">Upload Post!</h3>
                        </div>
                        <div class="modal-action m-0">
                          <label for="my-modal" class="cursor-pointer">
                            X
                          </label>
                        </div>
                      </div>
                      <form action="../backend/upload.php" method="post" enctype="multipart/form-data">

                        <input type="text" name="title" class="bg-transparent w-full h-12 border-none focus:outline-none focus:shadow-none" placeholder="What's On Your Mind ? <?php if(isset($_SESSION['newUsername'])){ echo $_SESSION['newUsername'];}else{ echo $_SESSION['username']; } ?>">
                        </input>
                        <div class="img py-6 mx-auto">
                          <input type="file" name="fileToUpload" id="fileToUpload" class="block w-full text-sm text-slate-500
                                      file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 file:cursor-pointer cursor-pointer
                                        " />
                        </div>
                        <div class="modal-action">
                          <button name="submit" type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-md py-2 px-3 text-white cursor-pointer ">
                            <label for="my-modal" class="cursor-pointer">
                              Post
                            </label>
                          </button>
                        </div>
                      </form>
                     </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->


        <!-- card4 -->
        
      </div>

      <!-- cards row 2 -->
      <?php
      require '../backend/dbcon/db.inc.php';
      $sql = "SELECT `title`, `img_name`, `Email` ,  `Author` FROM `user_data`  ORDER BY `user_data`.`Id` DESC";
      $query = mysqli_query($conn, $sql);
      while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        // echo $result['title'];
        echo ("  
              <div class=' flex justify-center mt-6 -mx-3'> 
                   <div class='w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none'>
              <div class=' min-w-0 break-words dark:bg-[#161118] bg-white shadow-soft-xl rounded-2xl bg-clip-border'>
                <div class=' p-4'>
                  <div class=' -mx-3'>
                    <div class=' px-3 '>
                      <div class=''>
                        <p class='pt-2 mb-1  font-bold'>");
        echo $result['Author'];
        echo ("</p>
                        <h5 class='font-semibold  p-3'> ");
        echo $result['title'];
        echo ("
                          </h5>
                    
                      </div>
                    </div>
                    <div class='px-6 py-6 text-center '>
                      <div class='h-full  rounded-xl'>
                        <div class='w-full h-full'>
                          <img class=' h-full  rounded-md  w-[550px] mx-auto ' src='../backend/uploads/");
        echo $result['img_name'];
        echo ("' alt='rocket' />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
          </div> ");
      };
      ?>
      <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                ©
                <script>
                  document.write(new Date().getFullYear() + ",");
                </script>
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.instagram.com/ashisf2f" class="font-semibold text-slate-700" target="_blank">Ashis Kunwar</a>
                for a better web.
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
              <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                  <a href="" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" >ASK Team</a>
                </li>
                <li class="nav-item">
                  <a href="https://instagram.com/ashisf2f/" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://ashiskunwar.com.np/" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://ashiskunwar.com.np/about" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end cards -->
  </main>
  <div fixed-plugin>
    <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer dark:bg-[#181616] bg-white px-4 py-2 text-slate-700">
      <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 dark:bg-[#161118] bg-white bg-clip-border px-2.5 duration-200">
      <div class="px-6 pt-4 pb-0 mb-0 dark:bg-[#161118] bg-white border-b-0 rounded-t-2xl">
        <div class="float-left">
          <h5 class="mt-4 mb-0">ASK UPDATE</h5>
          <p>The thing just make you up.</p>
        </div>
        <div class="float-right mt-6">
          <button fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      <div class="flex-auto p-6 pt-0 sm:pt-4">



        <!-- Navbar Fixed -->

        <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />

        <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="../backend/actions/logout.php">Log Out</a>
      
        <div class="w-full text-center">
          <!-- <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a> -->
          <a href="https://twitter.com/ashisf2f" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
          <a href="https://www.instagram.com/ashisf2f" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-instagram"></i> Visit </a>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>