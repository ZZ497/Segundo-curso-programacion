import SwiftUI
let film: (pelicula: String, anios: Double, rank: Float) = ("Cars", 2006,7.5)

let (pelicula, _,_) = film

struct ContentView: View {
    var body: some View {
        VStack {
            Image(systemName: "globe")
                .imageScale(.large)
                .foregroundColor(.accentColor)
            Text(film.pelicula)
            
        }
    }
}
