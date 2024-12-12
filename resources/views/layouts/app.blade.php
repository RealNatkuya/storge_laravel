<!DOCTYPE html>
<html data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resourses/src/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
.bungee-tint-regular {
  font-family: "Bungee Tint", sans-serif;
  font-weight: 400;
  font-style: normal;
}
    </style>
</head>
<body>
        <div id="main" class="bg-yellow-200 flex justify-between items-center rounded-b-lg">
            <div id="banner" class="bungee-tint-regular">
                @yield('banner')
            </div>
            <select class="select select-bordered w-full max-w-xs" onchange="document.documentElement.setAttribute('data-theme', this.value)">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
              </select>              
            <div id="menu" class="px-5 py-5 flex space-x-2">
                <div class="flex-none">
                    <ul class="menu menu-horizontal px-1">
                      <li><a href="{{ url ('/')}}" class="text-blue-500 hover:underline">Home</a></li>
                      <li><a href="{{ url ('assignment')}}" class="text-blue-500 hover:underline">Assignment</a></li>
                      <li><a href="{{ url ('bio')}}" class="text-blue-500 hover:underline">Bio</a></li>
                      <li>
                        <details>
                          <summary>Parent</summary>
                          <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="{{ url ('title')}}" class="text-blue-500 hover:underline">title</a></li>
                            <li><a href="{{ url ('program')}}" class="text-blue-500 hover:underline">program</a></li>
                            <li><a href="{{ url ('tools')}}" class="text-blue-500 hover:underline">tools</a></li>
                            <li><a href="{{ url ('project_type')}}" class="text-blue-500 hover:underline">project_type</a></li>
                            <li><a href="{{ url ('project_status')}}" class="text-blue-500 hover:underline">project_status</a></li>
                          </ul>
                        </details>
                      </li>
                    </ul>
                  </div>
            </div>
        </div>
        <div id="content">
            @yield('content')
         </div>
        <div id="footer">
            <footer class="footer p-10 bg-base-200 text-base-content">
                <div>
                  <span class="footer-title">Services</span> 
                  <a href="{{ url ('/')}}" class="text-blue-500 hover:underline">Home</a>
                  <a href="{{ url ('assignment')}}" class="text-blue-500 hover:underline">Assignment</a>
                  <a href="{{ url ('bio')}}" class="text-blue-500 hover:underline">Bio</a>
                </div>  
                <div>
                  <span class="footer-title">Legal</span> 
                  <a href="{{ url ('title')}}" class="text-blue-500 hover:underline">title</a>
                  <a href="{{ url ('program')}}" class="text-blue-500 hover:underline">program</a>
                  <a href="{{ url ('tools')}}" class="text-blue-500 hover:underline">tools</a>
                  <a href="{{ url ('project_type')}}" class="text-blue-500 hover:underline">project_type</a>
                  <a href="{{ url ('project_status')}}" class="text-blue-500 hover:underline">project_status</a>
                </div>
                <div>
                    @yield('footer')
                </div>
              </footer>   
        </div>
    </div>
</body>
</html>