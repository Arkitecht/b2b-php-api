<?php

namespace Arkitecht\B2B\SOAP\Receiving;

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
    const SystemError = 'SystemError';
    const DatabaseError = 'DatabaseError';


}
