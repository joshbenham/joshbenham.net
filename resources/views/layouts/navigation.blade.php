<a href="/" class="{{ request()->is('/') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">
    About
</a>

<a href="/resume" class="{{ request()->is('resume') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">
    Resume
</a>

<a href="/uses" class="{{ request()->is('uses') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">
    Uses
</a>

<a href="/goals" class="{{ request()->is('goals') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">
    Goals
</a>

<a href="/contact" class="{{ request()->is('contact') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">
    Contact
</a>
