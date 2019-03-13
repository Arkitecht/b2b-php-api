<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class ResultCode
{
    const __default = 'Success';
    const Success = 'Success';
    const WrongCompanyId = 'WrongCompanyId';
    const AccountNotSetup = 'AccountNotSetup';
    const WrongDealerCode = 'WrongDealerCode';
    const LogOnFailed = 'LogOnFailed';
    const AccountInactive = 'AccountInactive';
    const ParameterError = 'ParameterError';
    const ProductError = 'ProductError';
    const WrongOrderId = 'WrongOrderId';
    const OrderAlreadyShipped = 'OrderAlreadyShipped';
    const OrderAlreadyCanceled = 'OrderAlreadyCanceled';
    const SystemError = 'SystemError';
    const DatabaseError = 'DatabaseError';


}
