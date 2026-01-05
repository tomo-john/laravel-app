<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public string $message = '';

    public function increment()
    {
        $this->count++;
    }

    public function decrement($value)
    {
        $this->count -= $value;
    }

    // バリデーション定義
    protected $rules = [
        'count' => 'required|integer|min:0',
    ];

    // リアルタイム検証
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function save()
    {
        // メッセージを一度初期化
        $this->message = '';

        // バリデーションを使用
        $this->validate();

        // 保存した風
        $this->message = '保存しました(ダミー)';
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
