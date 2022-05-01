<footer class="main-footer">
    <div class="container">
        <div class="links text-center">
            <ul>
                <li>
                    <a href="{{ route('a-propos') }}">à propos</a> 
                </li>
                <li>
                    <a href="{{ route('enseignement') }}">Enseignement</a>
                </li>
                <li>
                    <a href="{{ route('recherche') }}">Recherche</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
            </ul>
        </div>
        <div class="social text-center">
            <ul>
                @if (\App\Models\Setting::find(1)->facebook)
                    <li>
                        <a href="{{ \App\Models\Setting::find(1)->facebook }}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                @endif
                @if (\App\Models\Setting::find(1)->instagram)
                    <li>
                        <a href="{{ \App\Models\Setting::find(1)->instagram }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                @endif
                @if (\App\Models\Setting::find(1)->youtube)
                    <li>
                        <a href="{{ \App\Models\Setting::find(1)->youtube }}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        <hr style="background-color: #ccc;">
        <div class="rights text-center py-3">
            <b>{{ env('APP_NAME') }}</b> <script>document.write(new Date().getFullYear())</script>&copy; Tous droits résérvés
        </div>
    </div>
</footer>