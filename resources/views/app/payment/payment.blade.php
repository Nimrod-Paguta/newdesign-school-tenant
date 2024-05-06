<x-user-layout>
    <style>
        .payment-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .payment-form {
            flex: 1;
            max-width: 100% auto; /* Adjust as needed */
            height: 400px;
            margin: 0 10px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .payment-option label {
            display: block;
            font-size: 16px;
            margin-bottom: 15px;
           
        }

        .payment-option label:hover {
            text-decoration: none;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

    <h1>Upgrade Your Account</h1>

    <div class="payment-container">
    @if($user->id != 1 || ($user->payment != 300 && $user->payment != 50 && $user->payment != 200))

        <form action="{{ route('users.payment', $user->id) }}" method="POST" class="payment-form">
            @csrf
            @method('PUT')

            <div class="payment-option">
                <label for="standard-payment">Standard Payment ($50)</label>
                <input type="hidden" name="payment" value="50">
            </div>

            <button type="submit">Standard Payment</button>
        </form>
        @endif
        @if($user->id != 1 || ($user->payment != 100 && $user->payment != 200 && $user->payment != 300))
        <form action="{{ route('users.payment', $user->id) }}" method="POST" class="payment-form">
            @csrf
            @method('PUT')

            <div class="payment-option">
                <label for="premium-payment">Premium Payment ($100)</label>
                <input type="hidden" name="payment" value="200">
            </div>

            <button type="submit">Premium Payment</button>
        </form>
        @endif

        @if($user->id != 1 || ($user->payment != 100 && $user->payment != 300))

        <form action="{{ route('users.payment', $user->id) }}" method="POST" class="payment-form">
            @csrf
            @method('PUT')

            <div class="payment-option">
                <label for="premium-payment">Premium Payment ($300)</label>
                <input type="hidden" name="payment" value="300">
            </div>

            <button type="submit">Premium Payment</button>
        </form>
        @endif


        
    </div>
</x-user-layout>
