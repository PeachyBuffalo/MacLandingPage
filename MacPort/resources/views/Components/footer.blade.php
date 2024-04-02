<div class="footer">
    <div class="flex flex-row items-center space-x-4">
        <a href="https://www.linkedin.com/in/macall-smith/" class="btn bg-{{ $color }}" target="_blank">LinkedIn</a>
        <a href="https://github.com/PeachyBuffalo" class="btn bg-{{ $color }}" target="_blank">GitHub</a>
        <a href="https://instagram.com/OneMacallAway" class="btn bg-{{ $color }}" target="_blank">Instagram</a>
        <a href="https://twitter.com/MacallRSmith" class="btn bg-{{ $color }}" target="_blank">Twitter</a>
        <a href="mailto:macall.smith@gmail.com" class="btn bg-{{ $color }}" target="_blank">Email</a>
    </div>
</div>
<style>
    .footer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        position: fixed;
        bottom: 1%;
        width: 100%;
    }
    .btn {
        display: inline-block;
        @apply {{ $color }};
        padding: 8px 24px;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
</style>
