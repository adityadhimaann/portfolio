<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative min-h-screen overflow-x-hidden m-0 p-0 bg-black">
    <!-- Background Video -->
    <video class="absolute top-0 left-0 w-full h-screen object-cover -z-10" autoplay muted loop playsinline>
        <source src="bg.mp4" type="video/mp4">
    </video>

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 -z-10"></div>

    <!-- Navbar -->
    <nav class="w-full p-6 flex items-center justify-between text-white">
        <!-- Left: Logo -->
        <div class="text-3xl font-bold">aditya</div>

        <!-- Center: Navigation Links -->
        <div class="absolute left-1/2 transform -translate-x-1/2 flex space-x-8">
            <a href="#projects" class="text-sm hover:text-gray-300 transition-colors">PROJECTS</a>
            <a href="#certifications" class="text-sm hover:text-gray-300 transition-colors">CERTIFICATIONS</a>
            <a href="#achievements" class="text-sm hover:text-gray-300 transition-colors">ACHIEVEMENTS</a>
        </div>

        <!-- Right: GitHub Link -->
        <a href="https://github.com/adityadhimaann" target="_blank" rel="noopener noreferrer"
            class="flex mr-10 items-center">
            <img class="w-10 h-10"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Github-desktop-logo-symbol.svg/2048px-Github-desktop-logo-symbol.svg.png"
                alt="GitHub Logo">
            <span class="mt-1 ml-2 text-md hover:text-gray-300 transition-colors">
                GitHub
            </span>
        </a>


    </nav>


    <!-- Main Section -->
    <main
        class="flex flex-col md:flex-row items-start justify-center px-6 md:px-24 py-20 space-y-10 md:space-y-0 md:space-x-16">
        <!-- Profile Image -->
        <img src="https://media.licdn.com/dms/image/v2/D5603AQEAQ1IbUpbpKA/profile-displayphoto-shrink_800_800/B56ZZYTii0GQAg-/0/1745238241871?e=1751500800&v=beta&t=aaJp9UJD9nm-kgFZf2nklrYhijWG1GBWhGCb4VIMLtI" alt="Aditya"
            class="border-4 border-indigo-400  shadow-lg w-[30%] h-[30%] rounded-full p-2 ml-0 md:ml-16 md:mt-24">

        <!-- About Me Text -->
        <div class="flex flex-col text-center md:text-left">
            <h1 class="text-white font-extrabold text-6xl mb-6 mt-8 md:mt-24">About Me</h1>
            <p class="text-white font-extralight text-xl max-w-2xl">
                I am a passionate web developer and designer with a strong grasp of creating modern, user-friendly
                websites.
                Always eager to learn and innovate, I love turning ideas into functional and visually appealing digital
                experiences.
                Looking for opportunities to contribute my skills, grow, and build impactful web solutions.
            </p>
            <a target="_blank"
                class="mt-16 bg-gradient-to-l w-[50%] hover:scale-105 duration-500 text-center p-4 rounded-full from-purple-300 via-blue-700 to-violet-500 text-2xl font-bold text-white whitespace-nowrap"
                href="https://drive.google.com/file/d/1tImAIar9tIZDvOofhHad51ZBF9WBNfWl/view?usp=drive_link">Check
                Resume</a>
        </div>

    </main>
    <div class="min-h-screen bg-black bg-[url('https://img.freepik.com/free-photo/panoramic-view-sunset-night_23-2148933764.jpg?t=st=1745756526~exp=1745760126~hmac=f0d1993726724f3cc3219da9b74ce92dc14a3477d4603d7626dd70a5dda295bb&w=2000')] bg-opacity-95 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Heading -->
            <h1 class="text-5xl font-bold text-center mb-4">Skills</h1>
            <p class="text-xl text-gray-400 text-center mb-12">Here are some of my skills on which I have been working
                on for the past 2 years.</p>

            <!-- Skills Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Frontend Section -->
                <div
                    class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                    <h2 class="text-3xl font-semibold mb-6 text-center">Frontend</h2>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-400">⚛️</span>
                            <span>React Js</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-black bg-white p-1 rounded">N</span>
                            <span>Next Js</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-orange-500">🛡️</span>
                            <span>HTML</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-500">🔤</span>
                            <span>CSS</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="bg-yellow-500 text-black p-1 rounded">JS</span>
                            <span>JavaScript</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-purple-500">B</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-400">📱</span>
                            <span>Flutter</span>
                        </div>
                    </div>
                </div>

                <!-- Backend Section -->
                <div
                    class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                    <h2 class="text-3xl font-semibold mb-6 text-center">Backend</h2>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-green-500">🟢</span>
                            <span>Node Js</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-gray-300">⚙️</span>
                            <span>Express Js</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span>Flask</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-400">🐬</span>
                            <span>MySQL</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-500">🐘</span>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-green-500">🍃</span>
                            <span>MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Section -->
                <div
                    class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                    <h2 class="text-3xl font-semibold mb-6 text-center">UI/UX</h2>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-600">☕</span>
                            <span>Java</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-500">K</span>
                            <span>Kotlin</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-green-500">🎨</span>
                            <span>Jetpack Compose</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-orange-500">📄</span>
                            <span>XML</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-400">🤖</span>
                            <span>Android Studio</span>
                        </div>
                    </div>
                </div>

                <!-- Others Section -->
                <div
                    class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                    <h2 class="text-3xl font-semibold mb-6 text-center">Others</h2>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-red-500">🔄</span>
                            <span>Git</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-white">🐙</span>
                            <span>GitHub</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-teal-500">🌐</span>
                            <span>Netlify</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-blue-500">⚙️</span>
                            <span>VS Code</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-orange-500">🚀</span>
                            <span>Postman</span>
                        </div>
                        <div class="bg-gray-800 rounded-full px-5 py-2 flex items-center gap-2">
                            <span class="text-purple-500">🎨</span>
                            <span>Figma</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="min-h-screen bg-black bg-[url('https://img.freepik.com/free-photo/panoramic-view-sunset-night_23-2148933764.jpg?t=st=1745756526~exp=1745760126~hmac=f0d1993726724f3cc3219da9b74ce92dc14a3477d4603d7626dd70a5dda295bb&w=2000')] text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Heading -->
            <h1 class="text-5xl font-bold text-center -mt-[10%]">Experience</h1>
            <p class="text-xl text-gray-400 text-center mb-16">My work experience as a software engineer and working on
                different companies and projects.</p>

            <!-- Timeline Container -->
            <div class="relative">
                <!-- Vertical Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-px bg-white"></div>

                <!-- Timeline Items -->
                <!-- First Experience Item -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-24 relative">
                    <!-- Left Content (on larger screens) -->
                    <div class="md:w-5/12 mb-8 md:mb-0 md:pr-8">
                        <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4">
                                    <img src="https://media.licdn.com/dms/image/v2/D4D0BAQGk7LpwLG6nkQ/company-logo_200_200/company-logo_200_200/0/1719257552819/bharat_intern_logo?e=2147483647&v=beta&t=Bv7Jz-Rw1JuWxeFQ6pB8eXJk57hC8Z9y8MZ60f7KjiE"
                                        alt="Bluestocks logo" class="w-12 rounded-lg h-12" />
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Frontend Intern</h3>
                                    <p class="text-gray-400">Bharat Intern</p>
                                    <p class="text-gray-400 text-sm">November 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-4">
                                I worked as a Frontend Engineer Intern at Bharat Intern, where I am gaining hands-on
                                experience in building and maintaining web pages. I am working with a team of talented
                                developers to create innovative solutions that meet the needs of our clients. I am also
                                learning new technologies and tools to enhance my skills as a software engineer.
                            </p>
                            <div class="mt-4">
                                <p class="font-semibold text-gray-300">Skills</p>
                                <div class="flex flex-wrap gap-2 text-gray-400 mt-2">
                                    <span>• HTML</span>
                                    <span>• CSS</span>
                                    <span>• JavaScript</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Dot -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white rounded-full flex items-center justify-center z-10">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center">
                            <img src="https://media.cakeresume.com/image/upload/s--G0ZEDWiW--/c_pad,fl_png8,h_400,w_400/v1690610004/gdvljgmtcbsiglzxd0oe.png"
                                alt="Company logo" class="w-16 rounded-full h-16" />
                        </div>
                    </div>

                    <!-- Right Date (on larger screens) -->
                    <div class="md:w-5/12 md:pl-8 text-center md:text-left">
                        <h3 class="text-xl font-semibold">November 2023</h3>
                    </div>
                </div>

                <!-- Second Experience Item (Reversed) -->
                <div class="flex flex-col md:flex-row-reverse justify-between items-center mb-24 relative">
                    <!-- Right Content (on larger screens) -->
                    <div class="md:w-5/12 mb-8 md:mb-0 md:pl-8">
                        <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4">
                                    <img src="https://play-lh.googleusercontent.com/8t6U6HGuMnP1DAJYpb4U_fEwVA7fgaOBJYRyfPHM5OLZllGj-8tsmJhu6Y4ikMrGpZg"
                                        alt="AWS Cloud Club logo" class="w-12 rounded-lg h-12" />
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Student Ambassador</h3>
                                    <p class="text-gray-400">ISP Member</p>
                                    <p class="text-gray-400 text-sm">September - October 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Being an ISP is not just a title; it's a commitment to bridging the gap between students
                                and opportunities. Through this program, I am gaining invaluable skills in leadership,
                                marketing, and communication, all while helping my peers discover amazing internships
                                and trainings that can shape their careers.
                            </p>
                            <div class="mt-4">
                                <p class="font-semibold text-gray-300">Skills</p>
                                <div class="flex flex-wrap gap-2 text-gray-400 mt-2">
                                    <span>• Leadership</span>
                                    <span>• Team Management</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Dot -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white rounded-full flex items-center justify-center z-10">
                        <div class="w-14 h-14 bg-blue-500 rounded-full flex items-center justify-center">
                            <img src="https://play-lh.googleusercontent.com/8t6U6HGuMnP1DAJYpb4U_fEwVA7fgaOBJYRyfPHM5OLZllGj-8tsmJhu6Y4ikMrGpZg"
                                alt="AWS logo" class="w-10 rounded-full h-10" />
                        </div>
                    </div>

                    <!-- Left Date (on larger screens) -->
                    <div class="md:w-5/12 md:pr-8 text-center md:text-right">
                        <h3 class="text-xl font-semibold">September - October 2023</h3>
                    </div>
                </div>

                
                </div>
            </div>
        </div>
    </div>
    <div class="min-h-screen bg-black bg-[url('https://img.freepik.com/free-photo/panoramic-view-sunset-night_23-2148933764.jpg?t=st=1745756526~exp=1745760126~hmac=f0d1993726724f3cc3219da9b74ce92dc14a3477d4603d7626dd70a5dda295bb&w=2000')] bg-opacity-95 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Projects Section -->
<div id="projects" class="min-h-screen  bg-[url('')] bg-opacity-95 text-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Heading -->
        <h1 class="text-5xl font-bold text-center mb-4">Projects</h1>
        <p class="text-xl text-gray-400 text-center mb-12">Here are some projects I've worked on that showcase my skills and creativity.</p>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <h2 class="text-2xl font-semibold mb-4">FleetTrack</h2>
                <p class="text-gray-300 mb-6">
                    A real-time vehicle tracking and management system built using HTML, CSS, and JavaScript with PHP and MySQL for backend database management.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-blue-800 rounded-full text-sm">HTML</span>
                    <span class="px-3 py-1 bg-yellow-600 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-purple-700 rounded-full text-sm">PHP</span>
                    <span class="px-3 py-1 bg-blue-600 rounded-full text-sm">CSS</span>
                    <span class="px-3 py-1 bg-blue-500 rounded-full text-sm">MySQL</span>
                </div>
                <a href="https://adityadhimaann.github.io/fleettrack/" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    View Project
                </a>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <h2 class="text-2xl font-semibold mb-4">CPU Scheduler Algorithm Calculator</h2>
                <p class="text-gray-300 mb-6">
                    A smart calculator for computing various CPU scheduling algorithms in operating systems, built with JavaScript for operations and HTML/Tailwind for UI.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-yellow-600 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-blue-800 rounded-full text-sm">HTML</span>
                    <span class="px-3 py-1 bg-blue-600 rounded-full text-sm">CSS</span>
                    <span class="px-3 py-1 bg-blue-400 rounded-full text-sm">Tailwind</span>
                </div>
                <a href="https://adityadhimaann.github.io/CpuScheduler/" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    View Project
                </a>
            </div>

            <!-- Project 3 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <h2 class="text-2xl font-semibold mb-4">Fitness-and-Sports</h2>
                <p class="text-gray-300 mb-6">
                    A website for managing gym tools and exercise routines. Secured top 10 position in the CodeBlocks Hackathon 2021 with this project.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-yellow-600 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-blue-800 rounded-full text-sm">HTML</span>
                    <span class="px-3 py-1 bg-blue-600 rounded-full text-sm">CSS</span>
                </div>
                <a href="https://adityadhimaann.github.io/Fitness-and-Sports/" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    View Project
                </a>
            </div>

            <!-- Project 4 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <h2 class="text-2xl font-semibold mb-4">AIVA - AI Virtual Assistant</h2>
                <p class="text-gray-300 mb-6">
                    An anxiety relief chatbot that helps users reduce stress through exercises, meditation ideas, and relaxation techniques. Built with OpenAI's API.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-blue-800 rounded-full text-sm">HTML</span>
                    <span class="px-3 py-1 bg-blue-400 rounded-full text-sm">TailwindCSS</span>
                    <span class="px-3 py-1 bg-yellow-600 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-green-600 rounded-full text-sm">OpenAI API</span>
                </div>
                <a href="https://adityadhimaann.github.io/AIVA-Anxiety-Relief-Chatbot/" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    View Project
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Education Section -->
<div id="education" class="min-h-screen bg-opacity-95 text-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Heading -->
        <h1 class="text-5xl font-bold text-center mb-4">Education</h1>
        <p class="text-xl text-gray-400 text-center mb-12">My academic journey and qualifications.</p>

        <!-- Education Timeline -->
        <div class="relative">
            <!-- Vertical Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-px bg-white"></div>

            <!-- First Education Item -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-24 relative">
                <!-- Left Content -->
                <div class="md:w-5/12 mb-8 md:mb-0 md:pr-8">
                    <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-2">Lovely Professional University</h3>
                        <p class="text-indigo-400 mb-2">Bachelor's in Computer Science and Engineering</p>
                        <p class="text-gray-300 mb-4">Current CGPA: 6.5</p>
                        <p class="text-gray-300 mb-4">
                            Pursuing my degree with a focus on software development, web technologies, and computer science fundamentals.
                        </p>
                        <p class="text-gray-400">Jalandhar, Punjab</p>
                    </div>
                </div>

                <!-- Timeline Dot -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white rounded-full flex items-center justify-center z-10">
                    <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">🎓</span>
                    </div>
                </div>

                <!-- Right Date -->
                <div class="md:w-5/12 md:pl-8 text-center md:text-left">
                    <h3 class="text-xl font-semibold">August 2023 - June 2027</h3>
                </div>
            </div>

            <!-- Second Education Item -->
            <div class="flex flex-col md:flex-row-reverse justify-between items-center mb-24 relative">
                <!-- Right Content -->
                <div class="md:w-5/12 mb-8 md:mb-0 md:pl-8">
                    <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-2">New Standard Public School</h3>
                        <p class="text-indigo-400 mb-2">Intermediate Degree</p>
                        <p class="text-gray-300 mb-4">Percentage: 90%</p>
                        <p class="text-gray-300 mb-4">
                            Completed my intermediate education with focus on science and mathematics.
                        </p>
                        <p class="text-gray-400">Raebareli, Uttar Pradesh</p>
                    </div>
                </div>

                <!-- Timeline Dot -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white rounded-full flex items-center justify-center z-10">
                    <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">📚</span>
                    </div>
                </div>

                <!-- Left Date -->
                <div class="md:w-5/12 md:pr-8 text-center md:text-right">
                    <h3 class="text-xl font-semibold">2022 - 2023</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Achievements Section -->
<div id="achievements" class="min-h-screen  bg-opacity-95 text-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Heading -->
        <h1 class="text-5xl font-bold text-center mb-4">Achievements</h1>
        <p class="text-xl text-gray-400 text-center mb-12">Recognition and accomplishments throughout my journey.</p>

        <!-- Achievements Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Achievement 1 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-yellow-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">🏆</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">CodeBlocks Hackathon</h3>
                <p class="text-gray-300 text-center">
                    Achieved Top 10 position in the CodeBlocks Hackathon 2021 for building a responsive Fitness-and-Sports website.
                </p>
            </div>

            <!-- Certification 1 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">🎖️</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Responsive Web Design</h3>
                <p class="text-gray-300 text-center">
                    Certification from FreeCodeCamp in Responsive Web Design principles and practices.
                </p>
            </div>

            <!-- Certification 2 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-purple-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">📜</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Computer Networking</h3>
                <p class="text-gray-300 text-center">
                    "The Bits and Bytes of Computer Networking" certification from Coursera.
                </p>
            </div>

            <!-- Certification 3 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">🔍</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Computer Communication</h3>
                <p class="text-gray-300 text-center">
                    Certification from Coursera focusing on computer communication principles.
                </p>
            </div>

            <!-- Certification 4 -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-red-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">💻</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Cross-platform app with .NET MAUI</h3>
                <p class="text-gray-300 text-center">
                    Microsoft certification for developing cross-platform applications using .NET MAUI.
                </p>
            </div>

            <!-- Brand Ambassador -->
            <div class="bg-gray-900 bg-opacity-80 rounded-xl p-8 hover:scale-105 duration-500 border-2 border-gray-500">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-indigo-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">🌟</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Brand Ambassador</h3>
                <p class="text-gray-300 text-center">
                    Served as a Student Ambassador at Internshala, representing the platform on campus and enhancing leadership skills.
                </p>
            </div>
        </div>
    </div>
</div>

            <!-- Heading -->
            <h1 class="text-5xl font-bold text-center mb-4">Contact</h1>
            <p class="text-xl text-gray-400 text-center mb-12">Feel free to reach out to me for any questions or
                opportunities!</p>

            <!-- Contact Form Card -->
            <div class="max-w-xl mx-auto bg-gray-900 bg-opacity-80 rounded-xl p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    Email Me
                    <span class="ml-2">🚀</span>
                </h2>

                <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for form data and error messages
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";
$formSubmitted = false;
$formSuccess = false;

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Validate subject
    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }
    
    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    $formSubmitted = true;
    
    // If no errors, insert data into database
    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message, submission_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            $formSuccess = true;
            
            // Clear the form fields after successful submission
            $name = $email = $subject = $message = "";
            
            // Optional: Send notification email to you
            $to = "dhimanaditya56@gmail.com";
            $email_subject = "New Contact Form Submission: $subject";
            $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
            $headers = "From: noreply@yourdomain.com\n";
            $headers .= "Reply-To: $email";
            mail($to, $email_subject, $email_body, $headers);
            
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Close connection
$conn->close();
?>

<!-- Here's the HTML form with PHP integration -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact">
    <!-- Display success message -->
    <?php if ($formSubmitted && $formSuccess): ?>
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        Your message has been sent successfully! I'll get back to you soon.
    </div>
    <?php endif; ?>

    <!-- Email Field -->
    <div class="mb-4">
        <input type="email" name="email" 
            class="w-full bg-gray-800 border <?php echo (!empty($emailErr)) ? 'border-red-500' : 'border-gray-700'; ?> rounded-lg p-4 text-gray-300 focus:outline-none focus:border-indigo-500"
            placeholder="Your Email" value="<?php echo $email; ?>" required />
        <?php if (!empty($emailErr)): ?>
        <span class="text-red-500 text-sm mt-1"><?php echo $emailErr; ?></span>
        <?php endif; ?>
    </div>

    <!-- Name Field -->
    <div class="mb-4">
        <input type="text" name="name"
            class="w-full bg-gray-800 border <?php echo (!empty($nameErr)) ? 'border-red-500' : 'border-gray-700'; ?> rounded-lg p-4 text-gray-300 focus:outline-none focus:border-indigo-500"
            placeholder="Your Name" value="<?php echo $name; ?>" required />
        <?php if (!empty($nameErr)): ?>
        <span class="text-red-500 text-sm mt-1"><?php echo $nameErr; ?></span>
        <?php endif; ?>
    </div>

    <!-- Subject Field -->
    <div class="mb-4">
        <input type="text" name="subject"
            class="w-full bg-gray-800 border <?php echo (!empty($subjectErr)) ? 'border-red-500' : 'border-gray-700'; ?> rounded-lg p-4 text-gray-300 focus:outline-none focus:border-indigo-500"
            placeholder="Subject" value="<?php echo $subject; ?>" required />
        <?php if (!empty($subjectErr)): ?>
        <span class="text-red-500 text-sm mt-1"><?php echo $subjectErr; ?></span>
        <?php endif; ?>
    </div>

    <!-- Message Field -->
    <div class="mb-6">
        <textarea name="message"
            class="w-full bg-gray-800 border <?php echo (!empty($messageErr)) ? 'border-red-500' : 'border-gray-700'; ?> rounded-lg p-4 text-gray-300 focus:outline-none focus:border-indigo-500 h-32 resize-none"
            placeholder="Message" required><?php echo $message; ?></textarea>
        <?php if (!empty($messageErr)): ?>
        <span class="text-red-500 text-sm mt-1"><?php echo $messageErr; ?></span>
        <?php endif; ?>
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300">
        Send
    </button>
</form>
            </div>
        </div>
    </div>
    <!-- Footer (optional) -->
    <footer class="w-full py-6 text-center text-white bg-gradient-to-tr from-black via-violet-900 to-black  bg-opacity-80">
        <div class="flex justify-center space-x-8 mb-6">
            <a href="mailto:dhimanaditya56@gmail.com" class="text-gray-300 hover:text-white transition duration-300">
                <span class="text-2xl"><img class="w-8 h-8" src="https://img.icons8.com/color/512/gmail-new.png" alt=""></span>
            </a>
            <a href="https://github.com/adityadhimaann" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
                <span class="text-2xl"><img class="w-8 h-8" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Github-desktop-logo-symbol.svg/2048px-Github-desktop-logo-symbol.svg.png" alt=""></span>
            </a>
            <a href="https://www.linkedin.com/in/aditya-dhiman" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
                <span class="text-2xl"><img class="h-10 w-10 -mt-1" src="https://static.vecteezy.com/system/resources/previews/023/986/926/non_2x/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" alt=""></span>
            </a>
            <a href="tel:+916306580926" class="text-gray-300 hover:text-white transition duration-300">
                <span class="text-2xl"><img class="w-8 h-8" src="https://cdn-icons-png.flaticon.com/512/7044/7044707.png" alt=""></span>
            </a>
        </div>
        <p>© 2025 Aditya Kumar. All rights reserved.</p>
    </footer>
</body>

</html>