<template>
    <div class="flex flex-nowrap items-center justify-between p-2 rounded-md border border-slate-400 mb-1 bg-lmhlBgInput h-11 w-full">
        <div class="text-slate-700 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs3994" />
                <g id="layer1">
                    <g aria-label="B" id="text4120"
                        style="font-size:24.7796px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.619492">
                        <path d="m 13.849436,10.980855 v 0.148678 q 2.45318,0.04956 4.28687,1.015964 0.966405,0.495592 1.511556,1.362878 0.569931,0.867286 0.569931,1.982368 0,5.005479 -8.028591,5.005479 H 3.7641383 V 20.099748 H 5.5978287 V 3.7699918 H 3.7641383 V 3.3735182 h 8.5241827 q 3.766499,0 5.501071,0.8425064 1.734572,0.8177268 1.734572,2.8248744 0,1.982368 -1.685013,2.973552 -1.660233,0.966404 -3.71694,0.966404 z m -2.47796,9.118893 q 2.081486,0 2.849654,-1.164641 0.792947,-1.189421 0.792947,-3.444364 0,-2.279724 -1.040743,-3.171789 -1.040744,-0.916845 -2.750536,-0.916845 h -0.59471 v 8.697639 z m -0.198237,-9.118893 q 1.486776,0 2.304503,-1.0655224 0.817726,-1.0655228 0.817726,-2.5522988 0,-1.5115556 -0.768167,-2.5522988 -0.768168,-1.0407432 -2.47796,-1.0407432 h -0.421253 v 7.2108632 z"
                        style="font-family:'Elsie Black';-inkscape-font-specification:'Elsie Black, Normal'"
                        id="path4122" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="text-slate-700 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs2" />
                <g id="layer1">
                    <path
                    d="m 12.773895,5.6215805 q -0.565116,0 -0.904185,-0.3108138 -0.310814,-0.3390696 -0.310814,-0.9041856 0,-0.5368602 0.310814,-0.847674 0.339069,-0.3108138 0.904185,-0.3108138 0.565116,0 0.87593,0.3108138 0.310814,0.3108138 0.310814,0.847674 0,0.565116 -0.310814,0.9041856 -0.310814,0.3108138 -0.87593,0.3108138 z M 10.99378,20.371108 q -0.508605,0 -0.762907,-0.282558 -0.2543021,-0.310814 -0.2543021,-0.988953 0,-0.423837 0.1977911,-1.497557 l 1.158487,-5.877207 q 0.08477,-0.423837 0.08477,-0.762906 0,-0.904186 -0.565116,-0.904186 -0.33907,0 -0.8759301,0.33907 -0.5086044,0.339069 -1.0737204,0.960697 -0.028256,0.02826 -0.084767,0.02826 -0.084767,0 -0.1695348,-0.08477 -0.056512,-0.113023 0.028256,-0.169534 0.988953,-1.130232 1.7801163,-1.6388369 0.791162,-0.5368602 1.497557,-0.5368602 0.508604,0 0.734651,0.3108138 0.254302,0.282558 0.254302,0.9606973 0,0.53686 -0.169535,1.441046 l -1.158488,5.933718 q -0.08477,0.452093 -0.08477,0.762906 0,0.87593 0.53686,0.87593 0.678139,0 1.921395,-1.243255 0.05651,-0.05651 0.113023,-0.05651 0.08477,0 0.141279,0.113024 0.05651,0.08477 -0.02826,0.169534 -0.960697,1.101977 -1.723604,1.638837 -0.762906,0.508604 -1.497557,0.508604 z"
                    style="font-style:italic;font-size:28.2558px;line-height:1.25;font-family:'Cormorant Garamond';-inkscape-font-specification:'Cormorant Garamond, Italic';stroke-width:0.706396"
                    id="path467" />
                </g>
            </svg>
        </div>
        <div class="text-slate-700 pt-0.5 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().toggleStrike().run()" :class="{ 'is-active': editor.isActive('strike') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs553" />
                <g id="layer1">
                    <g aria-label="S" id="text713" style="font-size:23.6833px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.592083" transform="translate(-0.10379559)">
                        <path d="m 12.217451,20.43577 q -2.01308,0 -3.5998612,-0.521033 -1.5867811,-0.521032 -2.7709461,-1.492048 l 0.710499,-1.563098 q 0.8289155,0.615766 1.657831,1.042066 0.8525988,0.402616 1.8236143,0.615765 0.971015,0.189467 2.178863,0.189467 2.107814,0 3.126196,-0.781549 1.018382,-0.781549 1.018382,-2.08413 0,-1.113116 -0.710499,-1.705198 -0.710499,-0.592083 -2.486747,-0.947332 L 10.678037,12.691331 Q 8.3807568,12.217665 7.2439584,11.151916 6.1308433,10.086168 6.1308433,8.2625535 q 0,-1.4920479 0.7578656,-2.605163 0.7815489,-1.1131151 2.1788636,-1.7288809 1.3973145,-0.6157658 3.2446125,-0.6157658 1.776247,0 3.244612,0.5447159 1.468364,0.5210326 2.51043,1.5394145 L 17.380411,6.9126054 Q 16.267296,5.9179068 15.035764,5.4916074 13.827916,5.0416247 12.288501,5.0416247 q -1.94203,0 -3.0788287,0.8525988 -1.1131151,0.8289155 -1.1131151,2.2735968 0,1.1604817 0.710499,1.8236141 0.710499,0.6394496 2.3446468,0.9710156 l 2.51043,0.497349 q 2.415696,0.497349 3.552495,1.492048 1.136798,0.994699 1.136798,2.794629 0,1.373632 -0.757865,2.43938 -0.734183,1.065749 -2.107814,1.657831 -1.373632,0.592083 -3.268296,0.592083 z"
                        style="font-family:Mulish;-inkscape-font-specification:'Mulish, Normal';paint-order:stroke fill markers"
                        id="path721" />
                    </g>
                    <path style="stroke-linecap:round;stroke-opacity:1" d="m 5.2394794,11.858172 13.5115196,0.03217" id="path780" />
                </g>
            </svg>
        </div>
        <div class="text-slate-700 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().setParagraph().run()" :class="{ 'is-active': editor.isActive('paragraph') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs1436" />
                <g id="layer1">
                    <g aria-label="P" id="text1562" style="font-size:25.3299px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.633248">
                        <path d="M 8.0309602,16.927241 V 6.7699508 q 0,-1.8744127 -1.291825,-1.8744127 -0.2026392,0 -0.5319279,0.05066 -0.4812681,0.07599 -0.6839073,0.07599 -0.8105568,0 -0.8105568,-0.8358867 0,-0.8865465 1.1145156,-0.8865465 0.1773093,0 0.3799485,0.02533 l 1.2411651,0.1519794 q 0.6079177,0.07599 1.5197941,0.07599 0.6332475,0 1.5197945,-0.07599 2.077051,-0.1773093 3.140907,-0.1773093 1.621114,0 2.786289,0.253299 1.671774,0.3546186 2.60898,1.5704538 0.962536,1.2158353 0.962536,2.9382685 0,2.3810107 -1.646443,3.6475057 -1.621114,1.266495 -4.711362,1.266495 h -1.798423 q -0.835886,0 -0.987866,-0.02533 h -0.05066 q -0.405278,0 -0.531928,0.151979 -0.101319,0.126649 -0.101319,0.633247 v 0.506599 q 0,3.216897 0.177309,3.900804 0.202639,0.683908 1.114516,0.683908 0.278629,0 0.531928,-0.07599 0.557257,-0.05066 0.683907,-0.05066 0.785227,0 0.785227,0.810557 0,0.911876 -1.114516,0.911876 0,0 -0.354618,-0.05066 L 10.71593,20.194798 q -0.531928,-0.07599 -1.5957841,-0.07599 -0.8865465,0 -1.4438044,0.07599 l -1.4691342,0.202639 q -0.05066,0 -0.1519794,0.02533 -0.1013196,0 -0.1773093,0 -1.1398455,0 -1.1398455,-0.886546 0,-0.354619 0.2279691,-0.582588 0.2279691,-0.253299 0.5572578,-0.253299 0.2786289,0 0.6839073,0.07599 0.1773093,0.05066 0.5319279,0.05066 1.291825,0 1.291825,-1.899743 z M 10.335981,5.4527959 Q 10.158672,5.706095 10.158672,6.8459405 v 3.7488255 q 0,0.683907 0.962536,0.785227 -0.07599,0 1.469134,0 1.798423,0 2.988929,-0.278629 2.254361,-0.531928 2.254361,-2.9635986 0,-3.2168974 -4.103444,-3.2168974 -3.039588,0 -3.394207,0.5319279 z"
                        style="font-family:'American Typewriter';-inkscape-font-specification:'American Typewriter, Normal'"
                        id="path1564" />
                    </g>
                </g>
            </svg>
        </div>
        <input
            class="w-8 rounded-md cursor-pointer"
            type="color"
            @input="editor.chain().focus().setColor($event.target.value).run()"
            :value="editor.getAttributes('textStyle').color"
        >
        <div class="text-slate-700 bg-lmhlBgInput cursor-pointer" @click="$emit('setLink')" :class="{ 'is-active': editor.isActive('link') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>
        </div>
        <div class="text-red-700 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().unsetLink().run()" :disabled="!editor.isActive('link')">
            <div class="flex items-center gap-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 -ml-4 mt-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </div>
        </div>
        <div class="text-slate-700 px-2 pt-0.5 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'is-active': editor.isActive('bulletList') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs2" />
                    <g id="path304-6"
                    transform="matrix(0.32369104,0,0,0.32369104,0.02132448,2.8152396)"><path
                    style="stroke-width:5.67124;stroke-linecap:round"
                    d="m 23.443011,27.925561 48.018879,0.018"
                    id="path9025" /><path
                    style="stroke-linecap:round"
                    d="m 23.443359,25.089844 a 2.8356199,2.8356199 0 0 0 -2.835937,2.833984 2.8356199,2.8356199 0 0 0 2.833984,2.837891 l 48.019531,0.01758 a 2.8356199,2.8356199 0 0 0 2.835938,-2.833985 2.8356199,2.8356199 0 0 0 -2.833984,-2.83789 z"
                    id="path9027" /></g><ellipse
                    style="fill-rule:evenodd;stroke-width:0.32665"
                    id="ellipse557"
                    cx="1.4520127"
                    cy="11.857408"
                    rx="1.378523"
                    ry="1.3787709" /><g
                    id="path304"
                    transform="matrix(0.32369104,0,0,0.32369104,0.02132448,2.7082036)"><path
                    style="stroke-width:5.67124;stroke-linecap:round"
                    d="m 23.443014,6.8099207 48.018876,0.018"
                    id="path9019" /><path
                    style="stroke-linecap:round"
                    d="m 23.443359,3.9746094 a 2.8356199,2.8356199 0 0 0 -2.835937,2.8339843 2.8356199,2.8356199 0 0 0 2.833984,2.8378907 l 48.019531,0.017578 A 2.8356199,2.8356199 0 0 0 74.296875,6.828125 2.8356199,2.8356199 0 0 0 71.462891,3.9921875 Z"
                    id="path9021" /></g><path
                    id="path494-9-99"
                    style="fill-rule:evenodd;stroke-width:0.32665"
                    d="M 2.830536,4.9155616 A 1.3785231,1.3787709 0 0 1 1.4520129,6.2943326 1.3785231,1.3787709 0 0 1 0.07348968,4.9155616 1.3785231,1.3787709 0 0 1 1.4520129,3.5367907 1.3785231,1.3787709 0 0 1 2.830536,4.9155616 Z" />
                    <g id="path304-9" transform="matrix(0.32369104,0,0,0.32369104,0.02132448,3.0069927)">
                        <path style="stroke-width:5.67124;stroke-linecap:round" d="m 23.44302,48.778591 48.01887,0.018" id="path455" />
                        <path style="stroke-linecap:round" d="m 23.443359,45.943359 a 2.8356199,2.8356199 0 0 0 -2.835937,2.833985 2.8356199,2.8356199 0 0 0 2.833984,2.835937 l 48.019531,0.01953 a 2.8356199,2.8356199 0 0 0 2.835938,-2.835937 2.8356199,2.8356199 0 0 0 -2.833984,-2.835938 z" id="path452" />
                    </g>
                    <ellipse style="fill-rule:evenodd;stroke-width:0.32665"
                        id="path494-9-9"
                        cx="1.4520129"
                        cy="18.799257"
                        rx="1.3785231"
                        ry="1.3787709" />
            </svg>
        </div>
        <div class="text-slate-700 px-2 pt-0.5 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'is-active': editor.isActive('orderedList') }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                <defs id="defs2" />
                    <g
                    id="path304-6"
                    transform="matrix(0.32369104,0,0,0.32369104,-0.04923266,2.6034279)"><path
                    style="stroke-width:5.67124;stroke-linecap:round"
                    d="m 23.443011,27.925561 48.018879,0.018"
                    id="path9025" /><path
                    style="stroke-linecap:round"
                    d="m 23.443359,25.089844 a 2.8356199,2.8356199 0 0 0 -2.835937,2.833984 2.8356199,2.8356199 0 0 0 2.833984,2.837891 l 48.019531,0.01758 a 2.8356199,2.8356199 0 0 0 2.835938,-2.833985 2.8356199,2.8356199 0 0 0 -2.833984,-2.83789 z"
                    id="path9027" /></g><g
                    id="path304"
                    transform="matrix(0.32369104,0,0,0.32369104,-0.04923266,2.4963919)"><path
                    style="stroke-width:5.67124;stroke-linecap:round"
                    d="m 23.443014,6.8099207 48.018876,0.018"
                    id="path9019" /><path
                    style="stroke-linecap:round"
                    d="m 23.443359,3.9746094 a 2.8356199,2.8356199 0 0 0 -2.835937,2.8339843 2.8356199,2.8356199 0 0 0 2.833984,2.8378907 l 48.019531,0.017578 A 2.8356199,2.8356199 0 0 0 74.296875,6.828125 2.8356199,2.8356199 0 0 0 71.462891,3.9921875 Z"
                    id="path9021" /></g><g
                    id="path304-9"
                    transform="matrix(0.32369104,0,0,0.32369104,-0.04923266,2.795181)"><path
                    style="stroke-width:5.67124;stroke-linecap:round"
                    d="m 23.44302,48.778591 48.01887,0.018"
                    id="path455" /><path
                    style="stroke-linecap:round"
                    d="m 23.443359,45.943359 a 2.8356199,2.8356199 0 0 0 -2.835937,2.833985 2.8356199,2.8356199 0 0 0 2.833984,2.835937 l 48.019531,0.01953 a 2.8356199,2.8356199 0 0 0 2.835938,-2.835937 2.8356199,2.8356199 0 0 0 -2.833984,-2.835938 z"
                    id="path452" /></g><g
                    aria-label="1"
                    id="text3775"
                    style="font-size:7.44319px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.18608"><path
                    d="m 2.27862,6.5223164 q 0.1562659,0.041123 0.2302866,0.1398168 0.074021,0.09047 0.074021,0.1973885 0,0.1151433 -0.082245,0.205613 -0.082245,0.09047 -0.2467355,0.1315923 H 0.98737047 Q 0.80643104,7.180278 0.71596133,7.0815837 0.63371613,6.974665 0.63371613,6.8595217 q 0,-0.1151433 0.0904697,-0.222062 Q 0.82288008,6.5223164 1.012044,6.5223164 H 1.2505551 V 3.1255899 q -0.1151433,0.082245 -0.2467356,0.082245 -0.13981682,0 -0.23028654,-0.09047 -0.0822452,-0.098694 -0.0822452,-0.222062 0,-0.074021 0.0328981,-0.1562658 0.0411226,-0.082245 0.12336779,-0.1480414 L 1.4150455,2.2208927 q 0.1069187,-0.041123 0.1809394,-0.041123 0.2549601,0 0.3289808,0.2878582 v 4.0546885 z"
                    style="font-family:Chalkboard;-inkscape-font-specification:'Chalkboard, Normal'"
                    id="path3903" /></g><g
                    aria-label="2"
                    id="text3775-8"
                    style="font-size:7.44319px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.18608"><path
                    d="M 2.1793329,9.9959562 Q 2.1135368,9.8479148 1.9983935,9.7492206 1.8914747,9.6505264 1.7763315,9.6340773 q -0.3618789,0 -0.6579616,0.1973885 -0.2960827,0.1891642 -0.54281829,0.4523482 -0.11514327,0.08225 -0.24673558,0.08225 -0.13981683,0 -0.23028654,-0.09047 -0.0822452,-0.09869 -0.0822452,-0.246736 0,-0.131592 0.07402068,-0.2549598 Q 0.24657084,9.6094038 0.42751026,9.4531379 0.60844969,9.2886475 0.81406268,9.1652797 1.0196757,9.0419119 1.2335132,8.9678913 q 0.222062,-0.074021 0.4523485,-0.074021 0.2631847,0 0.4934712,0.1151433 0.2302866,0.1069187 0.3947769,0.3125317 0.1727149,0.1973885 0.2714092,0.4770221 0.098694,0.2796336 0.098694,0.6086146 0,0.106919 -0.024674,0.222062 -0.09047,0.378328 -0.2796337,0.616839 Q 2.4589666,11.484594 2.22868,11.657309 2.006618,11.8218 1.7598824,11.961616 1.5213714,12.093209 1.3075338,12.257699 1.1019209,12.422189 0.94565499,12.6607 0.78938912,12.890987 0.740042,13.252866 h 1.5626587 q 0.098694,0 0.1480413,-0.02467 0.049347,-0.0329 0.074021,-0.04935 0.016449,-0.01645 0.082245,-0.09869 0.074021,-0.08225 0.1069188,-0.09869 0.041123,-0.02467 0.09047,-0.0329 0.057572,-0.0082 0.098694,-0.0082 0.1480414,0 0.2385111,0.106919 0.09047,0.09869 0.09047,0.238511 0,0.09047 -0.024674,0.139817 -0.016449,0.04935 -0.032898,0.0658 -0.1562659,0.222062 -0.3701034,0.361879 -0.205613,0.131592 -0.4770221,0.131592 H 0.36993863 Q 0.04918237,13.95195 0.01628429,13.598296 0.04095785,13.326887 0.09030497,13.071926 0.13965208,12.808742 0.2301218,12.570231 0.32059151,12.323495 0.46040834,12.117882 0.60022517,11.904045 0.81406268,11.73133 1.0032266,11.583288 1.2499622,11.451696 q 0.2467356,-0.131592 0.4687976,-0.287858 0.222062,-0.16449 0.3783279,-0.378328 0.1562659,-0.213837 0.1562659,-0.518145 0,-0.08225 -0.032898,-0.172715 -0.032898,-0.09047 -0.041123,-0.098694 z"
                    style="font-family:Chalkboard;-inkscape-font-specification:'Chalkboard, Normal'"
                    id="path3906" /></g><g
                    aria-label="3"
                    id="text3775-7"
                    style="font-size:7.44319px;line-height:1.25;font-family:Baskerville;-inkscape-font-specification:'Baskerville Normal';stroke-width:0.18608"><path
                    d="m 0.11090468,20.551424 q -0.09046971,-0.123368 -0.09046971,-0.25496 0,-0.139817 0.09046971,-0.222062 0.0904697,-0.09047 0.23028655,-0.09047 0.10691875,0 0.22206202,0.08225 0.11514328,0.07402 0.23851107,0.164491 0.12336779,0.09047 0.25496008,0.172715 0.1398169,0.07402 0.2960827,0.07402 0.222062,0 0.394777,-0.09047 0.1809394,-0.09869 0.2960827,-0.254961 0.1233677,-0.156265 0.1809394,-0.353654 0.065796,-0.197388 0.065796,-0.403001 0,-0.213838 -0.1480413,-0.353655 -0.1398168,-0.139816 -0.3536543,-0.222062 -0.205613,-0.08225 -0.4276751,-0.115143 -0.222062,-0.0329 -0.38655237,-0.0329 -0.15626587,-0.04112 -0.23028655,-0.131592 -0.0740207,-0.09869 -0.0740207,-0.205613 0,-0.106919 0.0822452,-0.197389 0.0822452,-0.09869 0.24673558,-0.139817 0.14804134,-0.01645 0.31253174,-0.04935 0.1644904,-0.04112 0.3207563,-0.09869 0.1562659,-0.0658 0.2796336,-0.156266 0.1315924,-0.09869 0.1973885,-0.238511 l 0.00822,-0.205613 -0.032898,-0.172715 q -0.016449,-0.09047 -0.082245,-0.148041 -0.065796,-0.05757 -0.1644904,-0.09047 -0.09047,-0.0329 -0.1973885,-0.04112 -0.1069188,-0.01645 -0.205613,-0.01645 -0.1891639,0 -0.411226,0.04112 -0.222062,0.0329 -0.32898076,0.09047 -0.0904697,0.0658 -0.16449038,0.115143 -0.0740207,0.04112 -0.16449039,0.04112 -0.13159231,0 -0.23028655,-0.09869 Q 0.04510853,16.842166 0.04510853,16.644777 0.06978209,16.50496 0.18492536,16.406266 0.30006863,16.307572 0.4563345,16.25 q 0.16449039,-0.05757 0.3372053,-0.09047 0.18093943,-0.0329 0.3207563,-0.04935 0.1398168,-0.01645 0.2138375,-0.01645 0.082245,0 0.049347,0 0.2960827,0 0.5510428,0.07402 0.2549601,0.0658 0.444124,0.213838 0.1973885,0.139816 0.3043073,0.361878 0.1151432,0.222062 0.1151432,0.52637 0,0.05757 -0.00822,0.172715 -0.00822,0.115143 -0.057572,0.25496 -0.049347,0.131592 -0.1727149,0.287858 -0.1151433,0.148041 -0.3372053,0.296083 0.1480413,0.08225 0.2878581,0.205613 0.1480414,0.115143 0.2549601,0.271409 0.1151433,0.148041 0.1809395,0.328981 0.065796,0.180939 0.065796,0.386552 0,0.312532 -0.1480413,0.616839 -0.1398169,0.304307 -0.3701034,0.542818 -0.222062,0.230287 -0.5099202,0.378328 -0.2878582,0.139817 -0.5757164,0.139817 -0.3701033,0 -0.6908596,-0.18094 -0.32075625,-0.180939 -0.60038992,-0.41945 z"
                    style="font-family:Chalkboard;-inkscape-font-specification:'Chalkboard, Normal'"
                    id="path3909" /></g>
            </svg>
        </div>
        <div class="text-slate-700 px-2 pt-0.5 bg-lmhlBgInput cursor-pointer" @click="editor.chain().focus().insertTable({ rows: 3, cols: 2, withHeaderRow: true }).run()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
            </svg>
        </div>
        <div class="text-slate-700 px-2 pt-0.5 bg-lmhlBgInput cursor-pointer" @click="toggleTableMenu">
            <div class="flex items-center gap-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                </svg>
            </div>
        </div>
    </div>
    <div id="table-menu" class="hidden -bottom-5 right-[3.2rem] text-xs text-slate-600 p-1 rounded-md border border-slate-400 mb-1 bg-lmhlBgInput h-32 w-24 z-20">
        <div class="flex flex-col items-start justify-around">
            <div class="cursor-pointer" @click="editor.chain().focus().addColumnBefore().run()">
                addColFore
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().addColumnAfter().run()">
                addColAft
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().deleteColumn().run()">
                delCol
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().addRowBefore().run()">
                addRowFore
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().addRowAfter().run()">
                addRowAft
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().deleteRow().run()">
                delRow
            </div>
            <div class="cursor-pointer" @click="editor.chain().focus().deleteTable().run()">
                delTable
            </div>
        </div>
    </div>
</template>

<script setup>

const props = defineProps({
    editor: Object
})

defineEmits([
    'setLink'
])

let showTableMenu = false

const toggleTableMenu = (event) => {
    showTableMenu = !showTableMenu

    var elMenu = document.getElementById("table-menu")
    var elStyle = document.getElementById("table-menu").style

    // elStyle.top = event.clientY + "px"
    // elStyle.left = event.clientX + 64 + "px"

    elMenu.classList.toggle('hidden')
    elMenu.classList.toggle('absolute')
}
</script>