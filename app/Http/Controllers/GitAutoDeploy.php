<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class GitAutoDeploy extends Controller
{

    private $commands = array(
        'echo $PWD',
        'whoami',
        'git pull',
        'git status',
        'git submodule sync',
        'git submodule update',
        'git submodule status',
    );

    public function doPull()
    {
        $output = '';

        foreach ($this->commands as $command) {
            $tmp = shell_exec($command . ' 2>&1');
            $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
            $output .= htmlentities(trim($tmp)) . " <br />";
        }

        return view('gitautodeploy', ['output' => $output]);
    }
}
