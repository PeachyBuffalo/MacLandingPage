
<div class="project-header">
    <h1 class="header-title">Prototypes</h1>
    <ul class="prototype-list">
        @foreach ($prototypes as $prototype)
            <li class="prototype-item">{{ $prototype }}</li>
        @endforeach
    </ul>
</div>

<style>
    .project-header {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #f8f9fa;
    }

    .header-title {
        margin-bottom: 10px;
        text-align: center;
    }

    .prototype-list {
        list-style-type: none;
        padding: 0;
    }

    .prototype-item {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        background-color: #e2e8f0;
    }
</style>
