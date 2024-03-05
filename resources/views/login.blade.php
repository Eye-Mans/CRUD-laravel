<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
    {{-- login --}}
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-6 m-auto bg-base-300 rounded-md shadow-md lg:max-w-lg">
            <h1 class="text-3xl font-semibold text-center"></h1>
            <form class="space-y-4" >
                <div>
                    <label class="label mt-5">
                        <span class="text-base label-text ">Email</span>
                    </label>
                    <input type="text" placeholder="Email Address" class="w-full input input-bordered input-primary" />
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Password</span>
                    </label>
                    <input type="password" placeholder="Enter Password"
                        class="w-full input input-bordered input-primary"  />
                </div>
                <div>
                    <a href="/table" class="btn btn-primary w-full mt-5">Login</a>
                </div>
            </form>
        </div>
    </div>
    {{-- login --}}
</body>
</html>