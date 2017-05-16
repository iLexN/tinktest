<?php

namespace Tests\Functional;

class AccountS7TransferOtherOwnerTest extends BaseTestCase
{
    var $ac1Id;
    var $ac2Id;

    public function testTransfer()
    {
        $ar = ['name'=>'account name1',
               'balance'=>'11000'
            ];
        $response = $this->runApp('POST', '/1/account',$ar);
        $result = \json_decode((string)$response->getBody(),1);
        $this->ac1Id = $result['data']['id'];

        $ar = ['name'=>'account name2'];
        $response = $this->runApp('POST', '/2/account',$ar);
        $result = \json_decode((string)$response->getBody(),1);
        $this->ac2Id = $result['data']['id'];


        $response = $this->runApp('POST', '/account/'.$this->ac1Id.'/transfer/'.$this->ac2Id,['amount'=>1000]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string)$response->getBody(),1);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals('account name1', $result['data']['name']);
        $this->assertEquals(10000, $result['data']['balance']);
        $this->assertEquals(1, $result['data']['ower']);
    }

}