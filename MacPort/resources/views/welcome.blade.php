<x-layout>
    <h1> {{$greeting}} to MacPort </h1>
</x-layout>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900">Macall Smith</h1>
        <p class="text-xl text-gray-700">Full Stack Developer</p>
    </div>
    <div class="mt-8">
        <div class="flex flex-col items-center space-y-4">
            <a href="https://www.linkedin.com/in/macall-smith/" class="btn" target="_blank">LinkedIn: Macall Smith</a>
            <a href="https://github.com/PeachyBuffalo" class="btn" target="_blank">GitHub: PeachyBuffalo</a>
            <a href="https://instagram.com/OneMacallAway" class="btn" target="_blank">Instagram: OneMacallAway</a>
            <a href="https://twitter.com/ChillestMac" class="btn" target="_blank">Twitter: ChillestMac</a>
            <a href="mailto:macall.smith@gmail.com" class="btn" target="_blank">Email: Email Me</a>
        </div>
    </div>
</div>
<style>
    .btn {
        display: inline-block;
        background-color: #4f46e5;
        color: white;
        padding: 8px 24px;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #4338ca;
    }
</style>