<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create my health</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap&family=Mulish:wght@300;400;500;600;700&display=swap">

        <!-- Styles -->
        @vite('resources/css/app.css')

        {{-- Scripts --}}
        @vite('resources/js/app.js')
    </head>

    <body class="antialiased bg-lmhlBg1 font-sans text-lmhlMainTextColorDark1">
        <nav class="absolute top-0 h-24 w-full bg-lmhlBg1 text-lmhlPanel1 flex justify-between items-center z-50 md:px-8 px-4 shadow-sm shadow-lmhlMain1" aria-label="non-mobile">
            <div id="logo" class="w-2/6 z-50">
                <a href="{{ url('/') }}">
                    <img src="/storage/images/cmh_whole.svg" alt="logo" class="md:h-16 h-14 min-h-14">
                </a>
            </div>

            <div id="menu" class="hidden sm:flex w-2/3 justify-between items-center">
                <div class="w-1/6">
                    <a href="{{ url('/') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">home</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/weare') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">we are</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/education') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">education</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/events') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">events</a>
                </div>
            </div>

            <div id="hamburger" class="sm:hidden cursor-pointer absolute top-8 mt-1 right-3 w-8 h-8 z-50">
                <div class="bg-lmhlPanel1 w-8 h-1 rounded-full transition-all duration-500 mt-3 before:content-[''] before:bg-lmhlPanel1 before:transition-all before:duration-500 before:w-8 before:h-1 before:rounded-full before:absolute before:-translate-y-3 after:transition-all after:duration-500 after:content-[''] after:bg-lmhlPanel1 after:w-8 after:h-1 after:rounded-full after:absolute after:translate-y-3"></div>
            </div>
        </nav>

        <nav id="mobile-menu" class="text-lmhlBg1 sm:hidden hidden flex-col items-center min-h-screen absolute top-24 text-center bg-lmhlPanel1 opacity-90 w-full pt-10 text-3xl z-10 origin-top animate-open-menu" aria-label="mobile">
            <a href="{{ url('/') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">home</a>
            <a href="{{ url('/weare') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">we are</a>
            <a href="{{ url('/education') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">education</a>
            <a href="{{ url('/events') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">events</a>
        </nav> 

        @yield('content')

        <footer class="w-full bg-lmhlMain1 grid gap-1 grid-cols-1 md:grid-cols-3 p-6 place-items-center">

            <div id="address" class="w-full py-2 text-lmhlBg1 font-light text-sm text-center md:text-left border-b border-lmhlHighlight5 md:border-lmhlMain1">
                <p class="font-bold">Address</p>
                <p class="leading-snug">Create My Health CIC<br>Headingley Heart Enterprise & Arts Centre<br>Bennett Road<br>LS6 3HN</p>
                <p><span class="font-bold">Company no.:</span> 14434175</p>
                <p><span class="font-bold">Email:</span> createmyhealth@proton.me</p>
            </div>

            <div id="address" class="w-full py-2 text-lmhlBg1 font-light text-xs text-center md:text-left border-b border-lmhlHighlight5 md:border-lmhlMain1">
                <p class="mb-2"><span class="font-bold">Website design and hosting:</span> Toby Russell tobyrussell@protonmail.com</p>
                <p class="mb-2"><span class="font-bold">Site photography:</span> "Home": Ameen Fahny, "We are...": Calum Lewis</p>
                <p class="mb-2"><span class="font-bold">Site text and editing:</span> Annette Russell (annettegrussell@icloud.com), Toby Russell</p>
            </div>

            <div id="pha" class="py-2 flex flex-col items-center w-full">
                <div class="mb-3">
                    <a href="https://the-pha.org/">
                        <svg class="h-24 w-auto inline-block cursor-pointer" width="100%" height="100%" viewBox="0 0 235 253" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <g transform="matrix(1,0,0,1,-21,-167)">
                                <g id="transparent-inverse-mono-compact" serif:id="transparent inverse mono compact" transform="matrix(1,0,0,1,-973.879,115.962)">
                                    <rect x="988.756" y="51.301" width="240.434" height="262.365" style="fill:none;"></rect>
                                    <clipPath id="_clip1">
                                        <rect x="988.756" y="51.301" width="240.434" height="262.365"></rect>
                                    </clipPath>
                                    <g clip-path="url(#_clip1)">
                                        <g transform="matrix(1.41275,0,0,1.24148,717.886,-181.064)">
                                            <g transform="matrix(3.57613,0,0,4.06949,-560.805,-840.58)">
                                                <path d="M221.828,271.935C221.463,271.935 221.166,272.232 221.166,272.597L221.166,280.811C221.166,281.166 221.454,281.453 221.809,281.453L224.224,281.453L224.224,278.858C224.224,278.731 224.274,278.611 224.363,278.521C224.452,278.432 224.573,278.382 224.699,278.382L226.506,278.382C228.305,278.382 229.55,277.04 229.55,275.242L229.55,275.062C229.55,273.263 228.305,271.935 226.506,271.935L221.828,271.935ZM225.483,274.19C226.147,274.19 226.451,274.55 226.451,275.117L226.451,275.228C226.451,275.795 226.133,276.155 225.483,276.155L224.224,276.155L224.224,274.19L225.483,274.19Z" style="fill:white;fill-rule:nonzero;"></path>
                                                <path d="M239.456,271.935L236.398,271.935L236.398,275.408L233.036,275.408C233.036,275.408 233.041,271.933 233.036,271.935C232.189,272.357 230.905,272.517 230.006,272.399C230.003,272.399 229.979,281.453 229.979,281.453L233.036,281.453L233.036,277.843L236.398,277.843L236.398,281.453L239.456,281.453L239.456,271.935Z" style="fill:white;fill-rule:nonzero;"></path>
                                                <path d="M246.767,272.75C246.589,272.261 246.123,271.935 245.603,271.935L242.914,271.935L239.442,281.453L242.568,281.453L242.97,280.112L245.802,280.112C246.1,280.112 246.362,280.307 246.448,280.592C246.563,280.977 246.705,281.453 246.705,281.453L248.817,281.453C249.074,281.453 249.315,281.328 249.462,281.117C249.61,280.907 249.645,280.638 249.557,280.396C248.858,278.48 247.395,274.472 246.767,272.75ZM244.671,274.591L245.667,277.981L243.606,277.981L244.616,274.591L244.671,274.591Z" style="fill:white;fill-rule:nonzero;"></path>
                                            </g>
                                            <g transform="matrix(0.335881,0,0,0.382219,145.546,173.064)">
                                                <g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M454.301,150.471C456.308,158.209 459.02,163.188 461.798,166.858C466.042,172.466 470.375,174.107 472.234,175.069C474.732,176.203 477.605,177.283 480.69,178.264C483.115,179.035 485.621,179.747 488.088,180.351C489.727,180.752 491.353,181.04 492.877,181.397C494.741,181.71 496.73,182.047 498.852,182.17C503.049,182.415 507.591,182.33 512.303,181.895C516.094,181.545 519.797,181.022 523.515,180.335C527.261,179.643 530.77,178.846 534.009,178.017C536.085,177.485 534.08,175.782 530.865,175.304C526.556,174.663 521.93,173.848 517.194,172.965C513.434,172.263 509.812,171.472 506.256,170.725C502.501,169.935 499.009,169.161 496.001,168.176C493.355,167.598 490.475,166.925 487.538,166.495C483.29,165.873 479.022,165.675 475.512,164.931C473.756,164.676 469.622,164.37 464.24,160.347C461.182,158.063 457.877,155.141 454.301,150.471Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M525.309,168.937C527.666,169.385 527.495,167.68 525.15,166.388C517.941,162.418 512.156,157.658 506.854,152.484C503.889,149.591 501.21,146.603 498.562,143.524C496.771,141.442 495.075,139.317 493.316,137.219C490.327,133.656 487.451,130.001 484.346,126.534C479.505,121.127 474.352,116.072 468.831,111.298C464.832,107.84 460.683,104.675 456.09,101.846C449.622,97.863 442.695,94.709 434.576,92.516C444.381,98.415 451.36,105.744 457.824,113.608C462.298,119.052 466.251,124.689 470.344,130.338C471.738,132.261 473.15,134.159 474.626,136.016C476.122,137.9 477.666,139.747 479.285,141.524C482.263,144.796 485.4,147.901 488.744,150.814C491.006,152.785 493.332,154.639 495.813,156.372C499.102,158.67 502.471,160.785 506.185,162.593C512.025,165.436 518.257,167.598 525.309,168.937Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-0.892592,-2)">
                                                        <path d="M422.9,170C404.926,182.947 389.06,190.912 374.541,195.822C362.024,200.054 350.636,201.695 339.755,201.868C330.655,202.012 321.982,200.987 313.383,199.594C304.425,198.144 295.582,196.189 286.584,194.389C273.052,191.681 259.227,189.276 244.489,188.848C231.212,188.462 217.287,189.808 202.138,194.122C195.316,196.111 187.921,198.805 182.187,202.503C177.613,205.452 174.12,208.959 172.84,213.157C174.639,209.344 178.435,206.5 183.177,204.299C189.107,201.548 196.455,199.888 203.186,198.858C217.956,196.501 231.204,197.011 243.711,198.64C257.799,200.476 270.794,204.082 283.695,207.305C291.04,209.14 298.347,210.848 305.729,212.072C317.035,213.948 328.506,214.808 340.43,213.645C352.258,212.492 364.531,209.402 377.527,203.131C391.673,196.306 406.541,185.739 422.9,170Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M414.389,150.471C403.111,145.184 391.398,141.23 379.192,138.675C373.902,137.567 368.61,136.778 363.251,136.269C356.035,135.584 348.828,135.426 341.679,135.787C336.842,136.031 332.041,136.524 327.334,137.331C322.542,138.151 317.851,139.296 313.281,140.658C306.218,142.764 299.477,145.371 293.08,148.408C286.388,151.585 280.155,155.147 274.404,159.166C265.17,165.618 257.415,172.928 251.239,181C259.497,173.884 269.503,168.243 280.746,163.498C290.73,159.284 301.577,156.119 313.06,153.764C316.973,152.962 320.935,152.268 324.948,151.593C327.579,151.151 330.227,150.723 332.887,150.29C339.468,149.218 346.137,148.337 352.894,147.718C360.992,146.976 369.097,146.506 377.302,146.585C389.827,146.707 402.181,147.72 414.389,150.471Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M319.907,44.362C333.518,44.616 346.924,44.944 360.051,45.457C381.029,46.276 401.014,47.849 419.318,51.291C428.116,52.946 436.476,55.046 444.368,57.699C456.741,61.86 467.886,67.448 477.292,75.401C489.459,85.01 496.036,93.68 500.04,102.26C503.251,109.14 504.896,115.913 506.411,123.008C508.656,133.52 510.703,144.587 516.521,157.202C525.45,176.166 533.931,182.205 541.801,187.234C546.197,190.044 550.357,192.48 554.207,197.046C557.867,201.386 561.247,207.548 564.32,217.616C562.33,206.984 559.55,200.311 556.283,195.478C547.308,182.199 534.463,183.751 523.952,154.14C519.452,141.801 518.536,131.191 517.148,121.124C516.029,113.007 514.637,105.233 511.395,97.295C507.197,87.019 499.827,76.545 485.945,64.811C480.359,60.336 474.329,56.46 467.798,53.312C453.927,46.627 438.064,42.71 420.837,40.875C404.901,39.178 387.835,39.26 370.05,40.191C353.756,41.044 336.979,42.712 319.907,44.362Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M319.907,50.553C327.108,51.239 332.826,54.156 338.443,58.058C341.888,60.45 344.873,63.328 347.867,66.471C348.95,67.608 349.985,68.785 351.064,69.951C352.136,71.108 353.192,72.288 354.283,73.444C356.514,75.807 358.758,78.121 360.878,80.581C362.71,82.707 364.477,84.796 366.147,86.909C367.587,88.731 377.53,95.715 376.217,89.882C376.028,89.043 375.822,88.21 375.598,87.381C374.87,84.677 373.959,82.011 372.881,79.281C371.503,75.792 369.831,72.456 367.838,69.218C366.506,67.054 365.016,64.992 363.336,63.101C361.625,61.174 359.725,59.431 357.707,57.882C354.563,55.469 351.267,53.421 347.718,51.908C344.963,50.734 342.263,49.793 339.362,49.264C332.85,48.078 326.558,48.285 319.907,50.553Z" style="fill:white;"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,-3,-2)">
                                                        <path d="M441.283,136.323C424.71,131.556 419.06,122.82 413.444,113.654C409.152,106.65 404.83,99.54 396.494,93.57C388.056,87.528 375.467,82.859 354.494,80.9C344.305,80.123 333.234,80.724 321.771,82.771C314.869,84.004 307.828,85.76 300.78,88.01C294.062,90.154 287.336,92.75 280.702,95.733C271.008,100.09 261.507,105.239 252.447,110.979C240.153,118.766 228.692,127.573 218.75,137.068C201.525,153.517 188.921,171.754 184.291,189.62C190.76,172.834 205.083,156.728 223.429,142.501C233.867,134.406 245.589,127.012 257.955,120.486C266.991,115.717 276.358,111.496 285.78,107.79C292.159,105.28 298.56,103.037 304.903,101.052C311.476,98.994 317.981,97.223 324.359,95.834C334.702,93.58 344.667,92.211 353.954,92.377C372.763,92.394 384.334,95.39 392.382,99.985C400.422,104.575 404.932,110.567 409.535,116.384C416.5,125.186 423.488,133.562 441.283,136.323Z" style="fill:white;"></path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(1.57864,0,0,1.52405,-231.446,-171.756)">
                                                    <g>
                                                        <g transform="matrix(1.37881,0,0,1.42819,-8523.59,-73.331)">
                                                            <path d="M6365.91,257.408C6365.77,257.371 6365.55,257.311 6365.53,257.219C6365.06,256.982 6364.51,256.709 6363.94,256.912C6363.52,257.062 6363.25,257.577 6362.88,258.433C6362.69,258.883 6362.74,259.864 6362.77,261.215C6362.85,264.554 6363.43,269.702 6364.15,275.256C6365.54,285.839 6367.54,297.849 6368.45,301.454C6368.95,303.576 6371.03,307.866 6373.54,312.897C6375.28,316.373 6377.23,320.178 6379.14,323.843C6382.82,330.917 6386.32,337.476 6387.83,340.115C6388.76,341.763 6392.75,344.359 6397.77,347.638C6406.12,353.1 6417.3,359.898 6424.58,365.643C6429.12,369.222 6432.12,372.487 6432.32,374.772C6432.32,374.772 6432.86,392.367 6432.86,392.367L6430.81,374.962C6430.47,372.954 6427.4,370.475 6423.14,367.611C6415.5,362.466 6403.92,356.571 6395.3,351.672C6391.22,349.352 6387.81,347.219 6385.69,345.542C6384.45,344.564 6383.61,343.647 6383.15,342.916C6380.99,339.43 6374.87,329.138 6369.94,319.678C6366.19,312.472 6363.18,305.705 6362.54,302.789C6361.69,298.523 6359.78,282.975 6359.1,271.236C6358.68,264.116 6358.84,258.336 6359.59,256.878C6360.65,254.812 6361.83,253.961 6362.9,253.658C6364.5,253.207 6366.06,253.984 6367.18,254.468C6367.36,254.549 6367.65,254.687 6367.91,255.005C6368.16,255.292 6368.56,255.921 6369.02,256.86C6370.53,259.911 6373.26,266.629 6375.75,273.55C6378.58,281.403 6381.1,289.481 6381.23,292.638C6380.9,290.018 6378.59,284.101 6375.84,277.786C6372.55,270.276 6368.63,262.236 6366.55,258.638C6366.3,258.211 6366.09,257.716 6365.91,257.408ZM6365.53,257.219C6365.53,257.195 6365.54,257.169 6365.57,257.141C6365.66,257.053 6365.78,257.171 6365.9,257.394L6366.01,257.433L6365.91,257.408L6365.9,257.394C6365.79,257.345 6365.66,257.283 6365.53,257.219Z" style="fill:white;"></path>
                                                        </g>
                                                        <g transform="matrix(1.37881,0,0,1.42819,-8523.59,-73.331)">
                                                            <path d="M6379.36,295.874C6379.38,296.021 6379.44,296.313 6379.52,296.507C6379.74,297.014 6380.05,297.57 6380.43,298.151C6382.31,301.041 6385.5,304.47 6386.59,306.472C6387.43,308.015 6388.54,310.385 6390.3,313.143C6391.49,315.009 6392.97,317.051 6394.88,319.131C6396.8,321.219 6399.02,323.333 6401.07,325.186C6404.64,328.421 6407.68,330.842 6407.68,330.842C6407.68,330.842 6403.6,328.177 6399.18,324.726C6397.36,323.305 6395.49,321.749 6393.81,320.199C6391.65,318.2 6389.94,316.204 6388.54,314.367C6386.52,311.709 6385.2,309.392 6384.22,307.892C6382.78,305.688 6378.44,301.809 6376.6,298.847C6375.53,297.124 6375.34,295.523 6375.78,294.402C6376.45,292.696 6378.27,291.286 6380.69,290.615C6383.11,289.943 6386.13,290.097 6388.88,291.348C6390.34,292.014 6392.3,293.892 6394.62,296.445C6397.51,299.62 6401.12,303.896 6405.35,307.557C6407.61,309.514 6410.05,311.292 6412.66,312.57C6416.82,314.68 6421.28,316.038 6425.75,317.35C6430.49,318.741 6435.26,320.059 6439.82,321.812C6442.21,322.731 6444.54,323.776 6446.78,325.021C6449.67,326.655 6453.99,330.014 6457.77,335.01C6460.45,338.571 6462.89,342.938 6464.34,348.04C6465.66,352.752 6466.59,359.658 6467.18,366.759C6468.33,380.434 6468.34,394.742 6468.34,394.742C6468.34,394.742 6467.03,380.549 6464.76,367.063C6463.61,360.272 6462.24,353.681 6460.61,349.24C6459.02,344.789 6456.58,341.064 6453.99,338.038C6450.51,333.955 6446.71,331.215 6444.16,329.947C6440.02,327.842 6435.55,326.523 6431.04,325.272C6426.31,323.962 6421.51,322.773 6416.89,321.115C6414.49,320.251 6412.13,319.241 6409.86,318.054C6406.83,316.439 6404.01,314.283 6401.45,311.867C6397.2,307.855 6393.64,303.206 6390.81,299.725C6389.16,297.7 6387.9,296.058 6386.83,295.488C6385.44,294.749 6383.91,294.465 6382.54,294.574C6381.13,294.685 6379.82,295.013 6379.36,295.874Z" style="fill:white;"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="matrix(-1,0,0,1,799.765,-0.266483)">
                                                        <g transform="matrix(1.37881,0,0,1.42819,-8523.59,-73.331)">
                                                            <path d="M6365.91,257.408C6365.77,257.371 6365.55,257.311 6365.53,257.219C6365.06,256.982 6364.51,256.709 6363.94,256.912C6363.52,257.062 6363.25,257.577 6362.88,258.433C6362.69,258.883 6362.74,259.864 6362.77,261.215C6362.85,264.554 6363.43,269.702 6364.15,275.256C6365.54,285.839 6367.54,297.849 6368.45,301.454C6368.95,303.576 6371.03,307.866 6373.54,312.897C6375.28,316.373 6377.23,320.178 6379.14,323.843C6382.82,330.917 6386.32,337.476 6387.83,340.115C6388.76,341.763 6392.75,344.359 6397.77,347.638C6406.12,353.1 6417.3,359.898 6424.58,365.643C6429.12,369.222 6432.12,372.487 6432.32,374.772C6432.32,374.772 6432.86,392.367 6432.86,392.367L6430.81,374.962C6430.47,372.954 6427.4,370.475 6423.14,367.611C6415.5,362.466 6403.92,356.571 6395.3,351.672C6391.22,349.352 6387.81,347.219 6385.69,345.542C6384.45,344.564 6383.61,343.647 6383.15,342.916C6380.99,339.43 6374.87,329.138 6369.94,319.678C6366.19,312.472 6363.18,305.705 6362.54,302.789C6361.69,298.523 6359.78,282.975 6359.1,271.236C6358.68,264.116 6358.84,258.336 6359.59,256.878C6360.65,254.812 6361.83,253.961 6362.9,253.658C6364.5,253.207 6366.06,253.984 6367.18,254.468C6367.36,254.549 6367.65,254.687 6367.91,255.005C6368.16,255.292 6368.56,255.921 6369.02,256.86C6370.53,259.911 6373.26,266.629 6375.75,273.55C6378.58,281.403 6381.1,289.481 6381.23,292.638C6380.9,290.018 6378.59,284.101 6375.84,277.786C6372.55,270.276 6368.63,262.236 6366.55,258.638C6366.3,258.211 6366.09,257.716 6365.91,257.408ZM6365.53,257.219C6365.53,257.195 6365.54,257.169 6365.57,257.141C6365.66,257.053 6365.78,257.171 6365.9,257.394L6366.01,257.433L6365.91,257.408L6365.9,257.394C6365.79,257.345 6365.66,257.283 6365.53,257.219Z" style="fill:white;"></path>
                                                        </g>
                                                        <g transform="matrix(1.37881,0,0,1.42819,-8523.59,-73.331)">
                                                            <path d="M6379.36,295.874C6379.38,296.021 6379.44,296.313 6379.52,296.507C6379.74,297.014 6380.05,297.57 6380.43,298.151C6382.31,301.041 6385.5,304.47 6386.59,306.472C6387.43,308.015 6388.54,310.385 6390.3,313.143C6391.49,315.009 6392.97,317.051 6394.88,319.131C6396.8,321.219 6399.02,323.333 6401.07,325.186C6404.64,328.421 6407.68,330.842 6407.68,330.842C6407.68,330.842 6403.6,328.177 6399.18,324.726C6397.36,323.305 6395.49,321.749 6393.81,320.199C6391.65,318.2 6389.94,316.204 6388.54,314.367C6386.52,311.709 6385.2,309.392 6384.22,307.892C6382.78,305.688 6378.44,301.809 6376.6,298.847C6375.53,297.124 6375.34,295.523 6375.78,294.402C6376.45,292.696 6378.27,291.286 6380.69,290.615C6383.11,289.943 6386.13,290.097 6388.88,291.348C6390.34,292.014 6392.3,293.892 6394.62,296.445C6397.51,299.62 6401.12,303.896 6405.35,307.557C6407.61,309.514 6410.05,311.292 6412.66,312.57C6416.82,314.68 6421.28,316.038 6425.75,317.35C6430.49,318.741 6435.26,320.059 6439.82,321.812C6442.21,322.731 6444.54,323.776 6446.78,325.021C6449.67,326.655 6453.99,330.014 6457.77,335.01C6460.45,338.571 6462.89,342.938 6464.34,348.04C6465.66,352.752 6466.59,359.658 6467.18,366.759C6468.33,380.434 6468.34,394.742 6468.34,394.742C6468.34,394.742 6467.03,380.549 6464.76,367.063C6463.61,360.272 6462.24,353.681 6460.61,349.24C6459.02,344.789 6456.58,341.064 6453.99,338.038C6450.51,333.955 6446.71,331.215 6444.16,329.947C6440.02,327.842 6435.55,326.523 6431.04,325.272C6426.31,323.962 6421.51,322.773 6416.89,321.115C6414.49,320.251 6412.13,319.241 6409.86,318.054C6406.83,316.439 6404.01,314.283 6401.45,311.867C6397.2,307.855 6393.64,303.206 6390.81,299.725C6389.16,297.7 6387.9,296.058 6386.83,295.488C6385.44,294.749 6383.91,294.465 6382.54,294.574C6381.13,294.685 6379.82,295.013 6379.36,295.874Z" style="fill:white;"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="w-full mr-2">
                    <h5 class="text-lmhlBg1 text-sm font-light text-center">A proud member of<br>People's Health Alliance</h5>
                </div>
            </div>

        </footer>
    </body>
</html>