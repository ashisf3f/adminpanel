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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>ASK | <?php  echo $_SESSION['username'] ?>  </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

  </head>
  <body class="m-0  dark:bg-[#181616] font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

 

    <div class="ease-soft-in-out   relative h-full max-h-screen  dark:bg-[#181616]/10 rounded-md  bg-gray-50 transition-all duration-200">
      <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in xl:flex-nowrap xl:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50" href="../index.php">ASK</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profile</li>
            </ol>
            <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 mr-0 sm:mr-2 md:mr-0 lg:flex lg:basis-auto ">
       
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full w-full">
          
              <li class="flex items-center">
                <a href="../../backend/actions/logout.php" class="block px-0 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
                  <i class=" hidden sm:inline fa fa-user sm:mr-1" aria-hidden="true"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="sm:hidden bi bi-box-arrow-right font-bold" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
                  <span class="hidden sm:inline">Log Out</span>
                </a>
              </li>
              <!-- <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-white transition-all ease-soft-in-out text-sm" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li> -->
          
          

              <!-- notifications -->

             
            </ul>
          </div>
        </div>
      </nav>

      <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
          <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl dark:bg-[#121211]/80  backdrop-saturate-200">
          <div class="flex justify-between  -mx-3">
            <div class="flex flex-wrap">
            <div class="flex-none w-auto max-w-full px-3">
              <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
              </div>
            </div>
            <div class="flex-none w-auto max-w-full px-3 my-auto">
              <div class="h-full">
                <h5 class="mb-1"> <?php echo $_SESSION['username'] ?></h5>
                <p class="mb-0 font-semibold leading-normal text-sm">Beginner / Programming</p>
              </div>
            </div>
            </div>
            <div class="text-center pt-2 px-24">
              <div class="relative right-0">
                <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills role="tablist">
                   <a href="my-post.php">See Your Post ?</a> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full p-6  dark:bg-[#181616]/60 rounded-md">
        <div class="flex flex-wrap  -mx-3">
          <div class="w-full max-w-full rounded-2xl  dark:bg-[#161118] mx-4  px-3 xl:w-4/12">
            <div class="relative flex flex-col h-full min-w-0 break-words dark:bg-[#161118] dark:text-gray-400 bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 dark:bg-[#161118] bg-white border-b-0  rounded-t-2xl">
                <h6 class="mb-0   ">Platform Settings</h6>
              </div>
              <div class="flex-auto p-4">
                <h6 class="font-bold leading-tight uppercase text-xs text-slate-500">Account</h6>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat ducimus in recusandae exercitationem distinctio unde veritatis harum doloribus eius deserunt! Aliquid ad, soluta autem est vero eaque repellendus eius atque?
                </ul>
                <h6 class="mt-6 font-bold leading-tight uppercase text-xs text-slate-500">Application</h6>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </ul>
              </div>
            </div>
          </div>
          <div class="w-full max-w-full px-3 mx-4 mt-3 dark:bg-[#161118]  rounded-2xl lg-max:mt-6 xl:w-4/12">
            <div class="relative flex flex-col h-full min-w-0 break-words  dark:bg-[#161118] bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white  dark:bg-[#161118] border-b-0 rounded-2xl">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex items-center w-full  dark:bg-[#161118] max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                    <h6 class="mb-0">Profile Information</h6>
                  </div>
                  <!-- <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none"> -->
                    <!-- <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                      <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                    </a> -->
                    
                <!-- <a href="javascript:;" class="p-0 text-white transition-all text-sm ease-soft-in-out">
                  <i fixed-plugin-button-nav class="cursor-pointer fas fa-user-edit text-sm text-slate-400" aria-hidden="true"></i>
                </a>
             
                    <div data-target="tooltip" class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                      Edit Profile
                      <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="flex-auto p-4  dark:bg-[#161118]">
                <p class="leading-normal text-sm">Hi, I`m  <?php echo $_SESSION['username'] ?>, Decisions: If you can`t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).</p>
                <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                <ul class="flex flex-col pl-0 mb-0  dark:bg-[#161118] rounded-lg">
                  <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal  dark:bg-[#161118] bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Full Name:</strong> &nbsp;  <?php echo $_SESSION['username'] ?></li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal  dark:bg-[#161118] bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Mobile:</strong> &nbsp; <?php echo $_SESSION['phone'] ?></li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal  dark:bg-[#161118] bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Email:</strong> &nbsp;  <?php echo $_SESSION['email'] ?></li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal  dark:bg-[#161118] bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Location:</strong> &nbsp; Nepal</li>
                  <li class="relative block px-4 py-2 pb-0 pl-0  dark:bg-[#161118] bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                    <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center text-blue-800 align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="https://facebook.com/ashisf2f">
                      <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-600" href="https://twitter.com/ashif2f">
                      <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900" href="https://instagram.com/ashisf2f">
                      <i class="fab fa-instagram fa-lg"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="flex-none w-full max-w-full px-3 mt-6">
            <div class="relative flex flex-col min-w-0 mb-6 break-words dark:bg-[#161118]  bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 dark:bg-[#161118]  bg-white rounded-t-2xl">
                <h6 class="mb-1">Projects</h6>
                <p class="leading-normal text-sm">Web projects</p>
              </div>
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                      <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                          <img src="https://screenshot-proxy.netlify.app/f_webp,w_204/https://d33wubrfki0l68.cloudfront.net/62dc05c0f3e785000aaf52eb/screenshot_2022-07-23-14-29-29-0000.png" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                        </a>
                      </div>
                      <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Project #1</p>
                        <a >
                          <h5 class="cursor-default">Simple </h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">As starting this is my first project made for my college work. I have used html , css and javascript..</p>
                        <div class="flex items-center justify-between">
                          <a  href="https://ashisf2f.netlify.app/" target="_blank" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Project</a>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                      <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                          <img src="https://screenshot-proxy.netlify.app/f_avif,w_204/https://d33wubrfki0l68.cloudfront.net/63209d4f1d27c900084013b5/screenshot_2022-09-13-15-11-04-0000.png" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-xl" />
                        </a>
                      </div>
                      <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Project #2</p>
                        <a >
                          <h5>Text Utils</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Music is something that every person has his or her own specific opinion about.</p>
                        <div class="flex items-center justify-between">
                          <a href="https://ashiskunwar.com.np" target="_blank" type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Project</a>
                      
                        </div>
                      </div>
                    </div>
                  </div>
              
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                      <div class="flex flex-col justify-center flex-auto p-6 text-center">
                        <a href="javascript:;">
                          <i class="mb-4 fa fa-plus text-slate-400"></i>
                          <h5 class="text-slate-400">New project</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="pt-4">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                  ASK<i class="fa fa-heart"></i> 
                 
                </div>
              </div>
              <!-- <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </footer>
      </div>
    </div>


    <div fixed-plugin class=" dark:bg-[#181616]/60">
      <a fixed-plugin-button class="hidden bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
      </a>
      <!-- -right-90 in loc de 0-->
      <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0  dark:bg-[#181616] bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0  dark:bg-[#181616] bg-white border-b-0 rounded-t-2xl">
          <div class="float-left">
            <h5 class="mt-4 mb-0">Edit Profile</h5>
            <!-- <p>See our dashboard options.</p> -->
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
          
<form>
  <div class="mb-6">
  
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
<textarea style="resize: none; height:12vw;" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>  

<button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Edit Bio</button>

</form>

        
          <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />

          <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank">View documentation</a>
        
        </div>
      </div>
    </div>
 
  </body>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
</html>
