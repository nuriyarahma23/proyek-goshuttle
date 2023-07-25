<?php
namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\KotaModel;

class MyAccountController extends BaseController
{
    protected $user;
    protected $kota;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->kota = new KotaModel();
    }
    public function index()
    {
        $user = $this->user->find(session()->get('id'));
        $dataKota = $this->kota->findAll();
        $kota = [];
        $grup_kota0 = [];
        foreach ($dataKota as $kd) {

            $kota[$kd['grup_kota']][] = $kd;
            $grup_kota0[] = $kd['grup_kota'];
        }

        $grup_kota = array_unique($grup_kota0);
        $data = [
            'grup_kota' => $grup_kota,
            'kota' => $kota,
            'user' => $user
        ];
        return view('myaccount', $data);
    }

    public function update_profil($id = null)
    {
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $no_telepon = $this->request->getVar('no_telepon');
        $point = $this->request->getVar('point');

        $rules = [
            'email' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Email harus diisi",
                ]
            ],
            'nama' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Nama harus diisi",
                ]
            ],
            'no_telepon' => [
                'rules' => "required",
                'errors' => [
                    'required' => "No Handphone harus diisi",
                ]
            ],
            'point' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Point harus diisi",
                ]
            ],

        ];
        if ($this->validate($rules)) {
            $data = [
                'nama' => $nama,
                'email' => $email,
                'no_telepon' => $no_telepon,
                'point' => $point,
            ];
            $this->user->update($id, $data);
            session()->setFlashdata('success', 'Profil Berhasil Diupdate!');
        }
        return redirect()->to('my-account')->with('status_icon', 'success')->with('status_text', 'Profil Berhasil Diupdate!');
    }

    public function update_password($id)
    {
        $user = $this->user->find($id);
        if (
            $this->validate([
                // 'old_password' => 'required|min_length[6]',
                // 'new_password' => 'required|min_length[6]|matches[confirm_new_password]',
                // 'confirm_new_password' => 'required|min_length[6]',
                'old_password' => [
                    'rules' => "required|min_length[6]",
                    'errors' => [
                        'required' => "Password harus diisi",
                        'min_length' => "Panjang password minimal 6 karakter"
                    ]
                ],
                'new_password' => [
                    'rules' => "required|min_length[6]",
                    'errors' => [
                        'required' => "Password harus diisi",
                        'min_length' => "Panjang password minimal 6 karakter",
                    ]
                ],
                'confirm_new_password' => [
                    'rules' => "required|matches[new_password]",
                    'errors' => [
                        'required' => "Password harus diisi",
                        'matches' => "Password tidak cocok",
                    ]
                ]
            ])
        ) {
            $oldPassword = $this->request->getPost('old_password');
            $newPassword = $this->request->getPost('new_password');
            if (password_verify($oldPassword, $user['password'])) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $this->user->update($id, ['password' => $hashedPassword]);

                return redirect()->to('/my-account')->with('success', 'Password Berhasil Diupdate!');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password Lama Salah!');
            }
        } else {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }
    }
}

?>