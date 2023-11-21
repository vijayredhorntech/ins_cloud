@extends('Layouts.layout')

@push('styles')
    <style>
        .featureBoxes {
            width: 0px;
            transition: all 0.5s ease-in-out;
        }

        .featureBoxesDiv:hover .featureBoxes {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        .movingDiv {
            left: 0%;
            animation: move 3s infinite alternate-reverse;
        }

        .rotatingImg {
            animation: rotate 3s infinite linear;

        }

        @keyframes move {
            0% {
                left: 0%;
            }

            100% {
                left: 100%;
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }


            100% {
                transform: rotate(360deg);
            }
        }


    </style>
@endpush

@section('content')

    <div class="relative">
        <div class="w-full h-[500px]">
            <img src="{{asset('assets/images/quickbooks-hosting/banner1.jpg')}}" class="w-full h-full object-cover">
        </div>

        <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/75">
            <div class="w-full">
                <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col items-center gap-2">
                    <h1 class="text-white lg:text-[40px] md:text-[35px] sm:text-[35px] text-[25px] font-bold lg:text-left md:text-left text-center">
                        Privacy Policy
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Welcome to Haiper Privacy Policy
                    </p>
                    <a href="{{route('registration')}}"
                       class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full py-12 bg-gray-100">
        <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">User Acceptance Policy</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    We at WinsCloud Matrix are dedicated to safeguarding the integrity, privacy, and security of the
                    essential information belonging to our esteemed clients. Holding the reputation as a committed
                    QuickBooks hosting provider, we adhere to the strictest security protocols to ensure that all client
                    data is stored in a secure atmosphere and that only authorized users have accessibility to it. A
                    number of software, hardware, or Internet connectivity issues could cause Winscloud Matrix to be
                    unable to provide users with access to their information. It is also possible that malicious intent
                    or natural disasters could cause interrupted access. Whenever issues arise resulting from
                    interrupted access to client data, Winscloud will be held harmless and indemnified. Winscloud Matrix
                    appreciates the reality that the Internet offers a platform for unfettered dialogue among online
                    users and the sharing of information; nonetheless, WinsCloud has the right to take some
                    precautionary or remedial measures when there are conflicting interests at play. WinsCloud has
                    created an Acceptable Use Policy (AUP) to safeguard these divergent agendas. Wincloud's AUP policy
                    outlines the customer's rights and responsibilities when using the company's services. It enhances
                    and clarifies specific aspects of each customer's service agreement. We reserve the right to revise
                    this AUP at any time. By using WinCloud's services following the publication of revisions to the AUP
                    on the company's website, www.winscloud.com, customers are considered to have accept any new or
                    expanded provisions of the AUP.
                </p>
            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Terms and conditions</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Providing application hosting services to the client is an agreement between WinsCloud and the
                    customer. WinsCloud will collect payment from the customer for the use of the Services. By
                    connecting to WinCloud's data center remotely, customers have access to WinCloud's services. We
                    provide our customers with access to their data and various hosted software applications provided by
                    WinsCloud or licensed by them. A copy of the Order attached hereto details the software and
                    applications available to the customer. Our mission at WinsCloud is to protect your critical
                    information and keep it confidential at all times. We take great precautions to ensure that no one
                    will ever access the credit card information provided by the users, which is stored in our database
                    in an encrypted format. Our payment mechanism is PCI Compliant, Level 1 DSS certified, and we use
                    the same encryption methods used by the leading financial institutions and banks.
                </p>
                <p class="text-gray-400 text-[17px] font-normal">
                    Our sophisticated automated payment processing option works following the user's billing period,
                    which can be Monthly, Quarterly, Half-Yearly, or Annually. However, if both parties agree, we are
                    also willing to set up a manual payment mechanism for the clients. Users shall be responsible for
                    prompt payment of the utilized services in such circumstances. Service discontinuation will occur if
                    payments are not made following the billing cycle. Customers should be aware that WinsCloud does not
                    evaluate, edit, censor, or take accountability for any information that its customers may make when
                    disseminating information online. A user who posts information on the Internet is as liable as
                    another author if their information violates copyright, slanders, or offends someone else.
                </p>
            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Spamming</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    'Spamming' is an unsolicited bulk and/or commercial email sent through the Internet without the
                    recipient's consent. It is bad not only because it has a poor effect on consumer perceptions of
                    WinCloud, but also because it can overburden the company's network and interfere with service to its
                    clients’ attitudes towards our firm.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Intellectual property violations</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Taking part in any action that violates or abridges another party's intellectual property rights,
                    including patents, copyrights, proprietary information, logos, registered trademark, and brand names
                    owned by businesses, people, or other organizations.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Facilitating a Violation of this AUP</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    This AUP prohibits the use of pings, floods, mailbombs, and denial-of-service attacks, as well as in
                    some way providing software, programs, services, or resources that violate it.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Other illegal activities</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Taking part in actions that have been deemed to be unlawful, such as promoting, disseminating, or
                    otherwise creating Ponzi and pyramid schemes, as well as fraudulently charging credit cards and
                    software piracy.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Export control violations</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Exporting encryption software outside of the United States, via the Internet or otherwise.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Obscene speech or Materials</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Advertisement, transmission, storage, display, or other dissemination of child pornography or
                    obscene words or expressions on WinsCloud’s network is not permitted.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Renewal Term and Termination Conditions</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    Upon activation and availability of Customer "user profiles" on WinsCloud Service, the contract
                    shall be effective on the date of activation and continue to be effective for one (1) month from the
                    effective date. To terminate service, customers must send written notice at least 15 days before the
                    termination date to accounting[at]thewinscloud. com. If either party terminates this User Acceptance
                    Policy agreement earlier than the expiration of the initial Term or any subsequent Term, it will
                    automatically renew for one (1) month. Customer data will be removed from active file systems of
                    WinsCloud terminal servers upon termination of services by Customer or termination of services by
                    WinsCloud. When WinsCoud terminates an account, customers may request that WinsCloud Matrix retain
                    and back up their data for 7 days only. All searches from terminated customer accounts will be
                    subject to time and materials charges. Only the previously authorized administrative contact for the
                    Customer account will be able to make such a request for data search or retrieval.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">No warranties</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    If Customer user profiles are activated and made available for use on Winscloud Service, the
                    Effective Date shall be the date they are activated. This Agreement will be in full force and effect
                    for an initial Term of one (1) month following the Effective Date. It is possible for customers to
                    terminate their service at any time by submitting a written notice 15 days in advance to
                    accounting[at]thewinscloud.com. This User Acceptance Policy agreement for Custom/Private Cloud
                    environments will keep renewing for one (1) month unless either party informs the other party in
                    writing before the end of the original Term or any subsequent Term. WinsCloud will delete all
                    Customer data from active file systems on its terminal servers upon the termination of Service by
                    Customer or termination of Service by WinsCloud. When WinsCloud's terminal servers will retain a
                    copy of the customer's data for a period of 7 days following termination of the account. Only the
                    previously approved administrative contact for the Customer account is allowed to conduct searches
                    from terminated Service accounts of customers.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">Limitation of Liability</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    WinsCloud will never be held responsible for any liabilities, including, but not limited to,
                    incidental or consequential damages, damages for lost data, or damages for lost profits, even if
                    WinsCloud Matrix has been informed of the risk of such losses. A lot of WinsCloud's clients are also
                    Internet service providers and data coming from them may have been obtained from one of their
                    clients or from a different private entity, according toWinsCloud Matrix. The provision of Internet
                    services by WinsCloud’s clients is exempt from any requirements that they filter or monitor
                    transmissions from or on behalf of their clients' users. The company has the right to take direct
                    action against a customer of a customer. Additionally, even though the action can have an impact on
                    other customers of the customer, WinsCloud Matrix may take immediate action against the WinsCloud
                    Matrix customer due to the actions of a customer of the customer. Except where mandated by law, a
                    governmental agency, or when the public's safety is at risk, WinsCloud Matrix will not proactively
                    monitor any private electronic mail messages sent or received by its clients. To make sure that its
                    facilities are functioning satisfactorily, WinsCloud Matrix monitors its service electronically.
                    Finally, WinsCloud Matrix may release customer data or information communicated over its network
                    where doing so is required to maintain the security of the system or to protect WinsCloud Matrix and
                    others from harm.
                </p>

            </div>

            <div class="w-full flex flex-col gap-4">
                <span class="text-[30px] text-black font-semibold">You agree with user acceptance policy</span>
                <p class="text-gray-400 text-[17px] font-normal">
                    You agree that, by enrolling an application hosting services order directly or indirectly through
                    this Website, you represent your organization as a representative and desire to sign a contract with
                    Winscloud Matrix that complies with the terms and conditions listed above.
                </p>

            </div>
        </div>


    </div>


@endsection
