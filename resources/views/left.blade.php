
@php
$jogos = \App\Game::all();
$consoles = \App\Console::all();
foreach ($consoles as $console) {
    if ($console->tag == 'PC') {
        $pc = $console->id;
    } else if ($console->tag == 'Xbox One') {
        $xbox = $console->id;
    } else if ($console->tag == 'PS4') {
        $ps4 = $console->id;
    } 
}
@endphp

<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #F0F07A">
    Total de jogos
    <span class="badge badge-primary badge-pill">{{ $jogos->count() }}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #F0F07A">
    PS4
    <span class="badge badge-primary badge-pill">{{ $jogos->where('console_id', $ps4)->count() }}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #F0F07A">
    XBOX One
    <span class="badge badge-primary badge-pill">{{ $jogos->where('console_id', $xbox)->count() }}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #F0F07A">
    PC
    <span class="badge badge-primary badge-pill">{{ $jogos->where('console_id', $pc)->count() }}</span>
</li>
</ul>