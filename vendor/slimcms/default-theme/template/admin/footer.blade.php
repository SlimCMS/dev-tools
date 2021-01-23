<!-- Scripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<footer class="bg-secondary border-top p-3 text-white">
    <small>{{ config('app.name') }}. Copyright {{ (new \Carbon\Carbon())->year }}</small>
</footer>
