<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header('Location: sign-in.php');
        exit();
}
?>




<!DOCTYPE html>
<html lang="en">
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
  <body class="m-0  dark:bg-[#181616] font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

  <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-evenly" navbar-main navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
              <a class="opacity-50 dark:text-white text-slate-700" href="../index.php">ASK</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal dark:text-white text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">My Post :</li>
          </ol>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-2 md:mr-0 lg:flex lg:basis-auto">

          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full w-full">

            <li class="flex ">
              <a href="profile.php">
                <i class='fa fa-user mr-1 mt-0.54'></i>
                <?php
                if (isset($_SESSION['username']) || $_SESSION['loggedin  '] = true) {
                  echo $_SESSION['username'];
                }       ?>
              </a>
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
      

            <!-- notifications -->



          </ul>
        </div>
      </div>
    </nav>
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
                      <form action="../../backend/upload.php" method="post" enctype="multipart/form-data">

                        <input type="text" name="title" class="bg-transparent w-full h-12 border-none focus:outline-none focus:shadow-none" placeholder="What's On Your Mind ? <?php echo $_SESSION['username'] ?>"></input>
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
      require '../../backend/dbcon/db.inc.php';
      $user_email = $_SESSION['email'];
      $sql = "SELECT `title`, `img_name`, `Email` ,  `Author` FROM `user_data` WHERE Email = '$user_email'  ORDER BY `user_data`.`Id` DESC ";
      $query = mysqli_query($conn, $sql);
      while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        // if(!isset($result)){
        //     echo "<div class='text-center font-bold py-64'>No Post To show! </div>";
        //   }
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
                          <img class=' h-full  rounded-md  w-[550px] mx-auto ' src='../../backend/uploads/");
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