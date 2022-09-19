<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
// EDIT DISINI UNTUK VALIDASI FORM LOGIN
public $register=[
    'username'=>[
    'rules'=>'required|min_length[5]',
    // 'rules'=>'required',
    ],
    'password'=>[
    'rules'=>'required',
    ],
    'repeatPassword'=>[
    'rules'=>'required|matches[password]',
    ],
    ];
// untuk menampilkan pesan error
    public $register_errors=[
        'username'=>[
            'required'=>'{field} Harus Diisi',
            'min_length'=>'{field} Minimal Harus 5 Karakter',
            ],
        'password'=>[
            'required'=>'{field} Harus Diisi',
            ],
        'repeatPassword'=>[
            'required'=>'{field} Harus Diisi',
            'matches'=>'{field} Tidak Match Dengan Password'
            ],
        ];
// FORM VALIDASI LOGIN
public $login=[
    'username'=>[
    'rules'=>'required|min_lenght[5]',
    ],
    'password'=>[
    'rules'=>'required',
    ],
    ];
// untuk menampilkan pesan error
    public $login_errors=[
        'username'=>[
            'required'=>'{field} Harus Diisi',
            'min_length'=>'{field}Minimal Harus 5 Karakter',
            ],
        'password'=>[
            'required'=>'{field} Harus Diisi',
            ],
        ];

}
