<div class="tenant-directory well">
    <ul class="nav list-unstyled">
        <li{{ Request::is(str_replace('/','',route('tenant.acorn', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.acorn') }}">acorn</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.babettes', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.babettes') }}">babettes</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.beet-yarrow', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.beet-yarrow') }}">beet & yarrow</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.boxcar', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.boxcar') }}">boxcar coffee roasters</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.collegiate-peaks-bank', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.collegiate-peaks-bank') }}">collegiate peaks bank</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.comida', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.comida') }}">comida</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.crooked-stave', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.crooked-stave') }}">crooked stave</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.heroes', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.heroes') }}">heroes like us</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.jennifer-olson', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.jennifer-olson') }}">jennifer olson photography</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.mondo-market', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.mondo-market') }}">mondo market</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.slow-food', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.slow-food') }}">slow food denver</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.proper-pour', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.proper-pour') }}">proper pour</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.svperordinary', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.svperordinary') }}">svper ordinary</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.wunder-werks', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.wunder-werks') }}">wunder werks</a>
        </li>
    </ul>
</div>