<h1>Please Pay To Add More User</h1>
<form action="{{ route('users.payment', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="payment">Payment:</label>
                        <input type="text" name="payment" value="{{ $user->payment }}" required>
                        <a href="/create"> <button type="submit">Submit</button></a>
                    </form>