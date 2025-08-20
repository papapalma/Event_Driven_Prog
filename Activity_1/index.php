<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen">
        <button id="theme-switch" class="p-2 rounded-full bg-gray-200 dark:bg-gray-800">
            <img id="dark" src="icons/dark.png" alt="Dark mode icon">
            <img id="light" src="icons/light.png" alt="Light mode icon">
        </button>
    </div>
</body>
</html>

<script>
    const themeSwitch = document.getElementById('theme-switch');
    const darkIcon = document.getElementById('dark');
    const lightIcon = document.getElementById('light');
    const html = document.documentElement;

    const enableDarkmode = () => {
        html.classList.add('dark');
        document.body.style.backgroundColor = '#18181b';
        darkIcon.style.display = 'none';
        lightIcon.style.display = 'inline';
        localStorage.setItem('darkmode', 'active');
    };

    const disableDarkmode = () => {
        html.classList.remove('dark');
        document.body.style.backgroundColor = '#f3f4f6';
        darkIcon.style.display = 'inline';
        lightIcon.style.display = 'none';
        localStorage.setItem('darkmode', null);
    };

    let darkmode = localStorage.getItem('darkmode');
     darkmode === 'active' ? enableDarkmode() : disableDarkmode();

    themeSwitch.addEventListener('click', () => {
        darkmode = localStorage.getItem('darkmode');
        darkmode !== 'active' ? enableDarkmode() : disableDarkmode();
    });
</script>
