<x-user-layout>
    <style>
        .subscription-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .subscription-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: left;
            max-width: 300px;
            width: 100%;
            margin: 20px;
            transition: transform 0.3s ease;
        }

        .subscription-card:hover {
            transform: translateY(-5px);
        }

        .subscription-card h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .subscription-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .subscription-card ul {
            margin: 10px 0;
            padding: 0;
        }

        .subscription-card li {
            list-style-type: none;
            font-size: 14px;
            color: #666;
            margin-left: 10px;
        }

        .subscription-card button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            display: block; 
            width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        .subscription-card button:hover {
            background-color: #45a049;
        }
    </style>

<h1 style="text-align: center; margin-bottom: 10px; font-size: 24px; font-weight: bold">Upgrade Your Account</h1>
<p style="text-align: center; margin-bottom: 20px;">Choose the subscription plan that suits you and your business best.</p>

    <div class="subscription-container">
        <!-- Basic Free -->
        @if($user->id != 1 || ($user->payment != 300 && $user->payment != 50 && $user->payment != 200))
            <div class="subscription-card">
                <h2>Basic</h2>
                <p><span style="font-size: 28px; font-weight: bold;">Free</span> basic features</p>
                <ul>
                    <li><span style="color: #4CAF50;">&#10003;</span> 3 department</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Default logo</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Default theme</li>
                </ul>
                <form action="{{ route('users.payment', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="payment" value="50">
                    <button class="btn btn-success" type="submit">Try</button>
                </form>
            </div>
        @endif

        <!-- Standard -->
        @if($user->id != 1 || ($user->payment != 100 && $user->payment != 200 && $user->payment != 300))
            <div class="subscription-card">
                <h2>Standard</h2>
                <p><span style="font-size: 28px; font-weight: bold;">₱100</span> per month</p>
                <ul>
                    <li><span style="color: #4CAF50;">&#10003;</span> 5 Departments</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Customizable logo</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Change theme color</li>
                </ul>
                <form action="{{ route('users.payment', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="payment" value="200">
                    <button class="btn btn-success" type="submit">Subscribe</button>
                </form>
            </div>
        @endif

        <!-- Premium -->
        @if($user->id != 1 || ($user->payment != 100 && $user->payment != 300))
            <div class="subscription-card">
                <h2>Premium</h2>
                <p><span style="font-size: 28px; font-weight: bold;">₱300</span> per month</p>
                <ul>
                    <li><span style="color: #4CAF50;">&#10003;</span> Unlimited Departments</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Customizable logo</li>
                    <li><span style="color: #4CAF50;">&#10003;</span> Change theme color</li>
                </ul>
                <form action="{{ route('users.payment', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="payment" value="300">
                    <button class="btn btn-success" type="submit">Subscribe</button>
                </form>
            </div>
        @endif
    </div>
</x-user-layout>
