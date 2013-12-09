<div class="tenant-directory well">
    <ul class="nav list-unstyled">
        <li{{ Request::is(str_replace('/','',route('tenant.acorn', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.acorn') }}">acorn</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.american-provisions', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.american-provisions') }}">americanum provisions</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.babettes', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.babettes') }}">babette's</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.beet-yarrow', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.beet-yarrow') }}">beet & yarrow</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.boxcar', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.boxcar') }}">boxcar coffee roasters</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.caprock', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.caprock') }}">caprock farm bar</a>
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
        <li{{ Request::is(str_replace('/','',route('tenant.meathead', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.meathead') }}">meathead</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.mondo-market', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.mondo-market') }}">mondo market</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.proper-pour', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.proper-pour') }}">proper pour</a>
        </li>
        <li{{ Request::is(str_replace('/','',route('tenant.svperordinary', array(), false))) ? ' class="active"' : '' }}>
          <a href="{{ route('tenant.svperordinary') }}">svper ordinary</a>
        </li>
    </ul>
</div>