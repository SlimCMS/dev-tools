<!-- Scripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<footer class="bg-secondary mt-5 p-2 text-white">
    <small>{{ config('app.name') }}. Copyright {{ (new \Carbon\Carbon())->year }}</small>
</footer>
