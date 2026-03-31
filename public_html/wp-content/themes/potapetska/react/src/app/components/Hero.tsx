import heroImage from "figma:asset/f253eada3b3fea1fce8818279ea73f3a35c7fc62.png";
import underwaterImage from "figma:asset/efa41ca1cb8b29dc9698d00aa1af6e8316b9da6d.png";

export function Hero() {
  const handleScroll = (href: string) => {
    const el = document.querySelector(href);
    if (el) el.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <section
      style={{
        position: "relative",
        width: "100%",
        minHeight: "100vh",
        display: "flex",
        alignItems: "center",
        overflow: "hidden",
        fontFamily: "'Barlow', sans-serif",
      }}
    >
      {/* Background image */}
      <div
        style={{
          position: "absolute",
          inset: 0,
          backgroundImage: `url(${heroImage})`,
          backgroundSize: "cover",
          backgroundPosition: "center 40%",
          backgroundRepeat: "no-repeat",
        }}
      />

      {/* Multi-layer overlay for depth */}
      <div
        style={{
          position: "absolute",
          inset: 0,
          background: "linear-gradient(105deg, rgba(3,56,105,0.88) 0%, rgba(3,56,105,0.65) 50%, rgba(3,56,105,0.4) 100%)",
        }}
      />
      <div
        style={{
          position: "absolute",
          inset: 0,
          background: "linear-gradient(to top, rgba(3,56,105,0.95) 0%, transparent 60%)",
        }}
      />

      {/* Decorative yellow line */}
      <div
        style={{
          position: "absolute",
          left: 0,
          top: 0,
          bottom: 0,
          width: "5px",
          background: "#fcdb00",
        }}
      />

      {/* Content */}
      <div
        className="relative max-w-screen-xl mx-auto px-6 w-full"
        style={{ paddingTop: "160px", paddingBottom: "120px" }}
      >
        <div style={{ maxWidth: "800px" }}>
          {/* Badge */}
          <div
            style={{
              display: "inline-flex",
              alignItems: "center",
              gap: "10px",
              background: "rgba(252,219,0,0.12)",
              border: "1px solid rgba(252,219,0,0.4)",
              borderRadius: "2px",
              padding: "6px 16px",
              marginBottom: "28px",
            }}
          >
            <div style={{ width: "8px", height: "8px", background: "#fcdb00", borderRadius: "50%" }} />
            <span
              style={{
                color: "#fcdb00",
                fontSize: "0.78rem",
                fontWeight: 700,
                letterSpacing: "0.14em",
                textTransform: "uppercase",
              }}
            >
              Profesionální podvodní práce v ČR od roku 1992
            </span>
          </div>

          {/* Headline */}
          <h1
            style={{
              fontFamily: "'Barlow Condensed', sans-serif",
              fontSize: "clamp(2.6rem, 5.5vw, 4.4rem)",
              fontWeight: 800,
              color: "#ffffff",
              lineHeight: 1.05,
              letterSpacing: "-0.01em",
              marginBottom: "12px",
              textTransform: "uppercase",
            }}
          >
            Potápěčská Stanice:
            <br />
            <span style={{ color: "#fcdb00" }}>Profesionální potápěči</span>
          </h1>

          {/* Subheadline */}
          <p
            style={{
              color: "rgba(226,232,240,0.9)",
              fontSize: "clamp(1rem, 1.6vw, 1.2rem)",
              lineHeight: 1.7,
              marginBottom: "44px",
              maxWidth: "680px",
              fontWeight: 400,
            }}
          >
            Vlastníme nejširší fond profesionální techniky v ČR. Realizujeme nejsložitější
            podvodní díla a poskytujeme znaleckou autoritu pro státní správu i průmysl.
          </p>

          {/* CTA buttons */}
          <div style={{ display: "flex", gap: "16px", flexWrap: "wrap" }}>
            <a
              href="#kontakt"
              onClick={(e) => { e.preventDefault(); handleScroll("#kontakt"); }}
              style={{
                background: "#fcdb00",
                color: "#033869",
                fontSize: "0.9rem",
                fontWeight: 700,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                textDecoration: "none",
                padding: "16px 36px",
                borderRadius: "3px",
                display: "inline-flex",
                alignItems: "center",
                gap: "10px",
                transition: "all 0.2s",
                boxShadow: "0 4px 24px rgba(252,219,0,0.3)",
              }}
              onMouseEnter={(e) => {
                (e.currentTarget as HTMLElement).style.background = "#e5c500";
                (e.currentTarget as HTMLElement).style.transform = "translateY(-2px)";
                (e.currentTarget as HTMLElement).style.boxShadow = "0 8px 32px rgba(252,219,0,0.45)";
              }}
              onMouseLeave={(e) => {
                (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                (e.currentTarget as HTMLElement).style.transform = "none";
                (e.currentTarget as HTMLElement).style.boxShadow = "0 4px 24px rgba(252,219,0,0.3)";
              }}
            >
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
              </svg>
              Poptat služby / Konzultace
            </a>

            <a
              href="#technika"
              onClick={(e) => { e.preventDefault(); handleScroll("#technika"); }}
              style={{
                background: "transparent",
                color: "#ffffff",
                fontSize: "0.9rem",
                fontWeight: 600,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                textDecoration: "none",
                padding: "16px 36px",
                borderRadius: "3px",
                border: "2px solid rgba(255,255,255,0.5)",
                display: "inline-flex",
                alignItems: "center",
                gap: "10px",
                transition: "all 0.2s",
              }}
              onMouseEnter={(e) => {
                (e.currentTarget as HTMLElement).style.borderColor = "#fcdb00";
                (e.currentTarget as HTMLElement).style.color = "#fcdb00";
              }}
              onMouseLeave={(e) => {
                (e.currentTarget as HTMLElement).style.borderColor = "rgba(255,255,255,0.5)";
                (e.currentTarget as HTMLElement).style.color = "#ffffff";
              }}
            >
              Půjčovna techniky
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Stats bar */}
          <div
            style={{
              display: "flex",
              gap: "0",
              marginTop: "72px",
              flexWrap: "wrap",
            }}
          >
            {[
              { value: "30+", label: "let praxe" },
              { value: "11", label: "specializací" },
              { value: "100%", label: "vlastní technika" },
              { value: "24/7", label: "dispečink" },
            ].map((stat, i) => (
              <div
                key={i}
                style={{
                  padding: "20px 36px",
                  borderLeft: i === 0 ? "none" : "1px solid rgba(255,255,255,0.15)",
                  paddingLeft: i === 0 ? "0" : "36px",
                }}
              >
                <div
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "2.2rem",
                    fontWeight: 800,
                    color: "#fcdb00",
                    lineHeight: 1,
                    letterSpacing: "-0.01em",
                  }}
                >
                  {stat.value}
                </div>
                <div
                  style={{
                    color: "rgba(226,232,240,0.7)",
                    fontSize: "0.78rem",
                    fontWeight: 500,
                    textTransform: "uppercase",
                    letterSpacing: "0.1em",
                    marginTop: "4px",
                  }}
                >
                  {stat.label}
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>

      {/* Scroll indicator */}
      <div
        style={{
          position: "absolute",
          bottom: "36px",
          left: "50%",
          transform: "translateX(-50%)",
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          gap: "8px",
          cursor: "pointer",
        }}
        onClick={() => handleScroll("#sluzby")}
      >
        <span style={{ color: "rgba(255,255,255,0.5)", fontSize: "0.7rem", letterSpacing: "0.12em", textTransform: "uppercase" }}>
          Přejít dolů
        </span>
        <div
          style={{
            width: "24px",
            height: "38px",
            border: "2px solid rgba(255,255,255,0.3)",
            borderRadius: "12px",
            display: "flex",
            justifyContent: "center",
            paddingTop: "6px",
          }}
        >
          <div
            style={{
              width: "4px",
              height: "8px",
              background: "#fcdb00",
              borderRadius: "2px",
              animation: "scrollBounce 1.6s ease-in-out infinite",
            }}
          />
        </div>
      </div>

      <style>{`
        @keyframes scrollBounce {
          0%, 100% { transform: translateY(0); opacity: 1; }
          50% { transform: translateY(8px); opacity: 0.4; }
        }
      `}</style>
    </section>
  );
}