<?php

namespace Daaner\IntellectMoney;

class IntellectMoneyClass
{

    /**
     * @param $data
     * @param $sum
     *
     * @return bool
     */
    public function validateResult($data, $sum): bool
    {
        $payment = new Payment(
            config('intellectmoney.login'),
            config('intellectmoney.password'),
            config('intellectmoney.password2'),
            config('intellectmoney.test_mode'));

        return $payment->validateResult($data) && $payment->getSum() === $sum;
    }



}
